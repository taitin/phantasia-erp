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
        Log::debug($inputText);
        if (str_contains($inputText, '產品')) {

            $query = trim(str_replace('產品', '', $inputText));
            $products = Product::where('ZHName', 'like', "%$query%")->get();
            $message = '';
            foreach ($products as $product) {
                $message .= $product->ZHName;
                $message .= $product->price;
            }
            Log::debug($message);

            return (new LineService())->replyMessage($replyToken, [["message" => $message]]);
        }
    }
}
