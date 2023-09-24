<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineController extends Controller
{
    //

    public function LineCallback(Request $request)
    {

        Log::debug($request);
        return;
        $replyToken = $request->events[0]['replyToken'];
        $inputText = $request->events[0]['message']['text'] ?? '';
        $socialId = $request->events[0]['source']['userId'];

        Log::debug($request->events[0]);
        Log::debug($request->events[0]);
        Log::debug($inputText);
        Log::debug($replyToken);
    }
}
