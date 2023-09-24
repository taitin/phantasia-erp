<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductModel;
use App\Services\LineService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineController extends Controller
{
    //

    public function LineCallback(Request $request)
    {

        $replyToken = $request->events[0]['replyToken'];
        $inputText = $request->events[0]['message']['text'] ?? '';
        $socialId = $request->events[0]['source']['userId'];
        if (str_contains($inputText, '產品')) {

            $query = trim(str_replace('產品', '', $inputText));
            $products = Product::where('ZHName', 'like', "%$query%")
                ->get();
            $message = '';
            $max = 0;
            $limit_num = min($products->count(), 3);
            $productIDs = [];
            for ($i = 1; $i <= $limit_num; $i++) {
                $select_product  = [];
                foreach ($products as $product) {
                    $num =  $product->currentAmount->num ?? 0;
                    if ($num > $max) {
                        if (!in_array($product->productID, $productIDs)) {
                            $select_product = $product;
                        }
                    }
                }

                if (!empty($select_product)) {
                    $productIDs[] = $select_product->productID;
                    $result[] =    $select_product;
                }
            }

            $output = [];
            foreach ($result as $product) {
                $discount = round($product->buyPrice * 100 / $product->price, 0);
                $message = '品名:' . $product->ZHName . "\n";
                $message .= '原價:' . $product->price . "\n";
                $message .= '進價:' .  $product->buyPrice . "(" .   $discount . "%)\n";
                $message .= '數量:' .  $num . "\n";
                $output[] = $message;
            }
            if (empty($output)) $m = '查無資料';
            else $m = implode("\n", $output);

            $r =  (new LineService())->replyMessage($replyToken, [["message" => $m]]);
            Log::debug($r);
        }
    }
}
