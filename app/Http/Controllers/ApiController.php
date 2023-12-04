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

        $orderNum = time();
        $data = [
            'APIKey' => config('ky.APIKey'),
            'cusID' => config('ky.cusID'),
            'cusName' => config('ky.cusName'),
            'package' =>
            [
                'main' =>
                [
                    'serviceType' => 1, //服務類別 1:取貨付款(店配) / 代收貨款(宅配) 3:取貨不付款(店配) / 一般配送(宅配、海外)
                    'orderType' => 'A05', //店配，A01:逕交付出貨；A02:確認後，交付出貨 宅配，A05:逕交付出貨；A06:確認後，交付出貨 海外，A11:逕交付出貨；A12:確認後，交付出貨
                    'orderID' =>    $orderNum, //訂單號碼
                    'shippingID' =>    $orderNum, //出貨單號 若無出貨單號，請填入訂單號碼
                    'orderAmount' => '999', //代收金額 或包裹價值
                    'memberID' => 'M001', //會員編號
                    'memberName' => '王小姐', //會員名稱
                    'rvName' => '王姑娘', //取件人姓名
                    'rvZip' => '22060', //取件人郵遞區號
                    'rvAddr' => '新北市板橋區', //取件人地址
                    'rvDTel' => '0286719616', //取件人日間電話
                    'rvNTel' => '0286719616', //取件人夜間電話
                    'rvMobile' => '0921181465', //取件人行動電話
                    'stType' => '', //取件門市通路  S11:統一超商 F:全家
                    'stCode' => '', //取件門市代碼
                    'stName' => '', //取件門市名稱
                    'supplierID' => '', //供應商代號
                    'supplierEmail' => '', //供應商電子郵件
                    'packageLength' => NULL,
                    'packageWidth' => NULL,
                    'packageHeight' => NULL,
                    'packageWeight' => NULL,
                    'deliveryCountry' => NULL,
                    'invoiceTitle' => NULL,
                    'rtURL' => 'https://erp.phantasia.com.tw/api/ky_callback',

                ],
                'detail' => [
                    'ProductItem' =>
                    [
                        [
                            'prodID' => 'P1234', //商品編號
                            'prodName' => 'LED 白光 10W 燈泡', //品名
                            'prodQty' => '3', //數量
                            'prodPrice' => NULL, //單價
                            'prodExpiryDate' => NULL, //商品指定效期
                            'delSheetRemark' => '易碎品', //出貨單
                        ],
                        [
                            'prodID' => 'P1234', //商品編號
                            'prodName' => 'LED 白光 10W 燈泡', //品名
                            'prodQty' => '3', //數量
                            'prodPrice' => NULL, //單價
                            'prodExpiryDate' => NULL, //商品指定效期
                            'delSheetRemark' => '易碎品', //出貨單
                        ]

                    ]

                ]

            ]
        ];

        $data['xml'] = convertArrayToXml($data, 'order', config('ky.attributes'));

        $data['url'] =  config('ky.url');
        return view('xml', $data);
    }


    function ky_callback(Request $request)
    {
        dump(xmlToArray($request->web_return_xml));
    }
}
