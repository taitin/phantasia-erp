<?php

namespace App\Http\Controllers;

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

        if (str_contains('產品', $inputText)) {

            $query = str_replace('產品', '', $inputText);
            $products = ProductModel::where('ZHName', 'like', "%$query%")->get();
            $message = '';
            foreach ($products as $product) {
                $message .= $product->ZHName;
                $message .= $product->price;
            }


            return (new LineService())->replyMessage($replyToken, [["message" => $message]]);
        }
    }
}
