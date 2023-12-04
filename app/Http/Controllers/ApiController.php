<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($func, Request $request)
    {

        return $this->{$func}($request);
    }

    public function ky_order(Request $request)
    {


        $data = [
            'APIKey' => '2c498e15d985b33485159a53cad824b4',
            'cusID' => 77011

        ];


        return arrayToXml($data);
    }
}
