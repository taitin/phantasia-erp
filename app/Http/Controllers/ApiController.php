<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function test()
    {

        dd('test');
    }
    public function ky_order(Request $request)
    {


        $data = [
            'APIKey' => config('ky.APIKey'),
            'cusID' => config('ky.cusID'),
            'rtURL' => 'https://erp.phantasia.com.tw/api/ky_callback'


        ];

        $data['xml'] = arrayToXml($data, 'order');
        $data['url'] =  config('ky.url');
        $str = '<?xml version="1.0" encoding="UTF-8"?>
        <order xsi:schemaLocation="urn:KYYO:API:ORDER:1.0 ORDER.xsd" xmlns="urn:KYYO:API:ORDER:1.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <APIKey>2bf3b310eed75465b22b9d2a2c939654</APIKey>
        <cusID>77011</cusID>
        <cusName>四五六好人網</cusName>
        <package>
        <main>
        <serviceType>3</serviceType>
        <orderType>A01</orderType>
        <orderID>AT20230810111452</orderID>
        <shippingID>BT20230810111452</shippingID>
        <orderAmount>999</orderAmount>
        <memberID>M001</memberID>
        <memberName>王小姐</memberName>
        <rvName>王姑娘</rvName>
        <rvZip></rvZip>
        <rvAddr></rvAddr>
        <rvDTel></rvDTel>
        <rvNTel></rvNTel>
        <rvMobile>0911000000</rvMobile>
        <stType>F</stType>
        <stCode>11783</stCode>
        <stName>全家三重新福田店</stName>
        <supplierID>S123</supplierID>
        <supplierEmail>S123@abc.com.tw</supplierEmail>
        <packageLength></packageLength>
        <packageWidth></packageWidth>
        <packageHeight></packageHeight>
        <packageWeight></packageWeight>
        <deliveryCountry></deliveryCountry>
        <invoiceTitle></invoiceTitle>
        <rtURL>https://ky.astertech.com.tw/order_api/ky_return_xml.jsp</rtURL>
        </main>
        <detail>
        <ProductItem>
        <prodID>P1234</prodID>
        <prodName>LED 白光 10W 燈泡</prodName>
        <prodQty>3</prodQty>
        <prodPrice></prodPrice>
        <prodExpiryDate></prodExpiryDate>
        <delSheetRemark>易碎品</delSheetRemark>
        </ProductItem>
        </detail>
        </package>
        </order>';
        return view('xml', $data);
    }


    function ky_callback(Request $request)
    {
        return $request->web_return_xml;
        dump(xmlToArray($request->web_return_xml));
        dd($request->web_return_xml);
    }
}
