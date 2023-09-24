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

        /*

        $replyToken = $request->e。vents[0]['replyToken'];
        $inputText = $request->events[0]['message']['text'] ?? '';
        $socialId = $request->events[0]['source']['userId'];
        */
        $inputText = '產品 繽紛';
        Log::debug($inputText);
        if (str_contains($inputText, '產品')) {

            $query = trim(str_replace('產品', '', $inputText));
            $products = Product::where('ZHName', 'like', "%$query%")
                ->orderBy('currentAmount.num', 'DESC')
                ->get();
            $message = '';
            foreach ($products as $product) {
                $num =  $product->currentAmount->num ?? 0;
                $message .= $product->ZHName . "\n";
                $message .= $product->price . "\n";
                $message .= $product->buyPrice . "\n";
                $message .=  $num . "\n";
            }
            dd($message);
            Log::debug($message);

            $r =  (new LineService())->replyMessage($replyToken, [["message" => $message]]);
            Log::debug($r);
        }
    }
}
