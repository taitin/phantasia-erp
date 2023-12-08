<?php

namespace App\Http\Controllers;

use App\Models\EcOrder;
use App\Models\Shipment;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
        // Current date and time
        $now = new DateTime();
        // Subtracting one day
        $yesterday = $now->sub(new DateInterval('P1D'));

        // Formatting the date and time
        $date =  $yesterday->format('Y-m-d');
        $filePath = 'RTFile/' . $date . '-status.txt';
        $date =  $yesterday->format('Ymd');
        $filePath = 'RTFile/04092_' . $date . '_STOCK_ALL.txt';


        // 確保檔案存在
        if (Storage::disk('ftp')->exists($filePath)) {
            // 使用 Storage 的 readStream 方法打開檔案流
            $stream = Storage::disk('ftp')->readStream($filePath);

            if ($stream) {
                // 使用標準的 PHP 函數來逐行讀取檔案
                $result = [];
                while (!feof($stream)) {
                    $line = fgets($stream);
                    if ($line != 'EOF3')                  // 處理每一行的內容，例如輸出
                        $result[] = preg_split('/\s+/', $line);
                }
                dd($result);
                // 關閉檔案流
                fclose($stream);
            }
        } else {
            echo "檔案不存在";
        }
    }
    public function ky_order(Request $request)
    {

        $shipment = Shipment::find($request->shipmentID);
        if ($shipment->sendKY == 0) {
            $data['shipmentID'] = $request->shipmentID;
            $data['sended'] = false;
        } else {

            $data['sended'] = true;
        }


        return view('xml_loading', $data);
    }


    public function go_ky_order(Request $request)
    {
        $shipment = Shipment::find($request->shipmentID);
        $rtURL =   url('api/ky_callback');
        $payway = [0 => 1, 1 => 3]; //0 (PH)款到發貨=>(KY)1:取貨付款(店配) / 代收貨款(宅配) ;1(PH)貨到付款=>3:取貨不付款(店配) / 一般配送(宅配、海外)

        //電商部
        if ($shipment->shopID == 666) {
            $orderID = $shipment->details->first()->orderProduct->orderID;
            $ec = EcOrder::where('orderID', $orderID)->first();
            if ($ec->transportID == 2) //宅配
            {
                $orderType = 'A05';
            } elseif (in_array($ec->transportID, [3, 4])) {
                //7-11 ezship 先自取
                $orderType = 'A05';
                $rvName = '林俊廷';
                $rvZip = '23159';
                $rvAddr = '自取';
                $rvDTel = '0921181465';
            } elseif (in_array($ec->transportID, [7])) {
                //全家
                $orderType = 'A01';

                $address = explode(',', $ec->receiverAddress);
                $stType = 'F';
                $stCode = $address[0] ?? '';
                $stName = $address[1] ?? '';
                $rvAddr = '';
            } else if (in_array($ec->transportID, [5])) {
                $orderType = 'A11';
            }


            $main =   [
                'serviceType' =>  $payway[$ec->payway], //服務類別 1:取貨付款(店配) / 代收貨款(宅配) 3:取貨不付款(店配) / 一般配送(宅配、海外)
                'orderType' =>   $orderType, //店配，A01:逕交付出貨；A02:確認後，交付出貨 宅配，A05:逕交付出貨；A06:確認後，交付出貨 海外，A11:逕交付出貨；A12:確認後，交付出貨
                'orderID' =>    $shipment->id, //訂單號碼
                'shippingID' =>   $ec->ECOrderNum, //出貨單號 若無出貨單號，請填入訂單號碼
                'orderAmount' => $shipment->total * $ec->payway, //代收金額 或包裹價值
                'memberID' => $ec->memberID, //會員編號
                'memberName' =>  '', //會員名稱
                'rvName' => $rvName ?? $ec->receiverName, //取件人姓名
                'rvZip' => $rvZip ?? getZip($ec->receiverAddress), //取件人郵遞區號
                'rvAddr' => $rvAddr ?? $ec->receiverAddress, //取件人地址
                'rvDTel' => $rvDTel ?? $ec->receiverPhone, //取件人日間電話
                'rvNTel' => $rvDTel ?? $ec->receiverPhone, //取件人夜間電話
                'rvMobile' => $rvDTel ?? $ec->receiverPhone, //取件人行動電話
                'stType' => $stType ?? '', //取件門市通路  S11:統一超商 F:全家
                'stCode' =>  $stCod ?? '', //取件門市代碼
                'stName' =>  $stName ?? '', //取件門市名稱
                'supplierID' => '', //供應商代號
                'supplierEmail' => '', //供應商電子郵件
                'packageLength' => '',
                'packageWidth' => '',
                'packageHeight' => '',
                'packageWeight' => '',
                'deliveryCountry' => '',
                'invoiceTitle' => '',
                'rtURL' => $rtURL,
            ];
        } else {
            $main =   [
                'serviceType' =>  $payway[$shipment->payway], //服務類別 1:取貨付款(店配) / 代收貨款(宅配) 3:取貨不付款(店配) / 一般配送(宅配、海外)
                'orderType' => 'A05', //店配，A01:逕交付出貨；A02:確認後，交付出貨 宅配，A05:逕交付出貨；A06:確認後，交付出貨 海外，A11:逕交付出貨；A12:確認後，交付出貨
                'orderID' =>    $shipment->id, //訂單號碼
                'shippingID' =>   $shipment->shippingNum, //出貨單號 若無出貨單號，請填入訂單號碼
                'orderAmount' => $shipment->total * $shipment->payway, //代收金額 或包裹價值
                'memberID' => $shipment->shopID, //會員編號
                'memberName' =>  $shipment->shop->name, //會員名稱
                'rvName' => $shipment->address->receiver, //取件人姓名
                'rvZip' => getZip($shipment->address->address), //取件人郵遞區號
                'rvAddr' =>  $shipment->address->address, //取件人地址
                'rvDTel' =>  $shipment->address->phone, //取件人日間電話
                'rvNTel' =>  $shipment->address->phone, //取件人夜間電話
                'rvMobile' =>  $shipment->address->phone, //取件人行動電話
                'stType' => '', //取件門市通路  S11:統一超商 F:全家
                'stCode' => '', //取件門市代碼
                'stName' => '', //取件門市名稱
                'supplierID' => '', //供應商代號
                'supplierEmail' => '', //供應商電子郵件
                'packageLength' => '',
                'packageWidth' => '',
                'packageHeight' => '',
                'packageWeight' => '',
                'deliveryCountry' => '',
                'invoiceTitle' => '',
                'rtURL' => $rtURL,
            ];
        }


        $products = [];
        foreach ($shipment->details as $detail) {
            if ($detail->product->type < 5)
                $products[] =
                    [
                        'prodID' => $detail->product->productNum, //商品編號
                        'prodName' => $detail->product->ZHName, //品名
                        'prodQty' =>  $detail->sellNum, //數量
                        'prodPrice' => $detail->sellPrice, //單價
                        'prodExpiryDate' => '', //商品指定效期
                        'delSheetRemark' => '', //出貨單備註
                    ];
        }



        $data = [
            'APIKey' => config('ky.APIKey'),
            'cusID' => config('ky.cusID'),
            'cusName' => config('ky.cusName'),
            'package' =>
            [
                'main' => $main,
                'detail' => [
                    'ProductItem' => $products

                ]

            ]
        ];

        $data['xml'] = convertArrayToXml($data, 'order', config('ky.attributes'));

        $data['url'] =  config('ky.url');
        if ($request->show_xml)        return   $data['xml'];
        return view('xml', $data);
    }


    function ky_callback(Request $request)
    {
        $data = (xmlToArray($request->web_return_xml));

        if (isset($data['package']) && $data['package']['orderStatus'] == 'OK' && isset($data['package']['orderID'])) {
            $shipment = Shipment::find($data['package']['orderID']);
            $shipment->sendKY = 1;
            $shipment->save();
            $result['result'] = true;
        } else {
            $result['result'] = false;
            $result['err'] = config('ky.errcode.' . $data['package']['orderStatus']);
        }
        return view('xml_result', $result);
    }
}
