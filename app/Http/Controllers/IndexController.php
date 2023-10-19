<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CashFlow;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    //

    public function reportToken(Request $request)
    {
        $date =  $request->date ?? date('Y-m-d');

        if (Admin::user())
            return redirect()->to(url('/report_api?' . http_build_query(['date' => $date, 'token' => md5($date . 'phantasia')])));
        return abort(404);
    }

    public function reportDetail(Request $request)
    {
        $date =  $request->date ?? date('Y-m-d');
        $mon_first = date('Y-m-01', strtotime($date));
        $data['date'] = $date;
        $yesterday_date  = date('Y-m-d', strtotime("-1 day", strtotime($date)));

        $today_y = date('Y', strtotime($date));
        $today_m = date('m', strtotime($date));
        $today_d = date('d', strtotime($date));

        $yesterday_y = date('Y', strtotime("-1 day", strtotime($date)));
        $yesterday_m = date('m', strtotime("-1 day", strtotime($date)));
        $yesterday_d = date('d', strtotime("-1 day", strtotime($date)));
        if ($request->using == 'today') $mon_first = $date;

        switch ($request->type) {
            case 'total_in':
                $stock =  Http::asForm()->post("https://shipment.phantasia.com.tw/product_flow/show_all", ['from' => $mon_first, 'to' => $date, 'shopID' => -1])
                    ->json();
                dd($stock);
                foreach ($stock['product'] as $product) {
                    if ($product['all']['S_amount'] != 0 || $product['all']['S_totalSellPrice'] != 0) {
                        $data['list'][] = [
                            'date' => $mon_first . '~' . $date,
                            'summary' => ($product['inf']['ZHName'] ?? ''),
                            'num' => $product['all']['S_amount'],
                            'amount' => $product['all']['S_totalSellPrice'],
                            'cost' => $product['all']['S_totalCost'],
                            'profit' => $product['all']['S_totalSellPrice'] - $product['all']['S_totalCost']
                        ];
                    }
                }
                break;
            case 'total_profit':
                $stock =  Http::asForm()->post("https://shipment.phantasia.com.tw/product_flow/show_all", ['from' => $mon_first, 'to' => $date, 'shopID' => -1])
                    ->json();
                foreach ($stock['product'] as $product) {
                    if ($product['all']['S_amount'] != 0) {
                        $data['list'][] = [
                            'date' => $mon_first . '~' . $date,
                            'summary' => ($product['inf']['ZHName'] ?? ''),
                            'num' => $product['all']['S_amount'],
                            'amount' => $product['all']['S_totalSellPrice'] - $product['all']['S_totalCost']


                        ];
                    }
                }
                break;
        }

        return view('detail', $data);
    }
    public function report(Request $request)
    {
        ini_set('memory_limit', '256M');

        if ($request->token != md5($request->date . 'phantasia')) return  abort(404);

        $date =  $request->date ?? date('Y-m-d');
        $mon_first = date('Y-m-01', strtotime($date));
        $data['date'] = $date;
        $yesterday_date  = date('Y-m-d', strtotime("-1 day", strtotime($date)));
        $data['yesterday_date'] = $yesterday_date;

        $today_y = date('Y', strtotime($date));
        $today_m = date('m', strtotime($date));
        $today_d = date('d', strtotime($date));

        $yesterday_y = date('Y', strtotime("-1 day", strtotime($date)));
        $yesterday_m = date('m', strtotime("-1 day", strtotime($date)));
        $yesterday_d = date('d', strtotime("-1 day", strtotime($date)));


        Http::get("https://shipment.phantasia.com.tw/product_flow/account_io_trans/$date/")
            ->json();


        $data['sell']['yesterday_cost'] = 0;
        $data['sell']['yesterday_profit'] = 0;
        $data['sell']['yesterday_sell'] = 0;

        $data['sell']['total_cost'] = 0;
        $data['sell']['total_profit'] = 0;
        $data['sell']['total_sell'] = 0;


        $stock =  Http::asForm()->post("https://shipment.phantasia.com.tw/product_flow/show_all", ['from' => $mon_first, 'to' => $date, 'shopID' => -1])
            ->json();

        foreach ($stock['product'] as $product) {

            $data['sell']['total_cost'] +=  $product['all']['S_totalCost'];
            $data['sell']['total_profit'] +=  $product['all']['S_totalSellPrice'] - $product['all']['S_totalCost'];
            $data['sell']['total_sell'] += $product['all']['S_totalSellPrice'];
        }
        $stock =  Http::asForm()->post("https://shipment.phantasia.com.tw/product_flow/show_all", ['from' => $mon_first, 'to' => $yesterday_date, 'shopID' => -1])
            ->json();


        foreach ($stock['product'] as $product) {

            $data['sell']['yesterday_cost'] +=  $product['all']['S_totalCost'];
            $data['sell']['yesterday_profit'] +=  $product['all']['S_totalSellPrice'] - $product['all']['S_totalCost'];
            $data['sell']['yesterday_sell'] += $product['all']['S_totalSellPrice'];
        }




        $data['sell']['today_cost'] = $data['sell']['total_cost'] - $data['sell']['yesterday_cost'];
        $data['sell']['today_profit'] = $data['sell']['total_profit'] - $data['sell']['yesterday_profit'];
        $data['sell']['today_sell'] = $data['sell']['total_sell'] - $data['sell']['yesterday_sell'];

        $today =  Http::get("https://shipment.phantasia.com.tw/product_flow/get_order_IO?year=$today_y&mon=$today_m&mday=$today_d&type=json")
            ->json();


        // dd($today);

        if ($today_d == '01' || $today_d == 1) $yesterday = [];
        else $yesterday =  Http::get("https://shipment.phantasia.com.tw/product_flow/get_order_IO?year=$yesterday_y&mon=$yesterday_m&mday=$yesterday_d&type=json")
            ->json();






        //http://shipment.phantasia.com.tw/product_flow/show_all
        /*
            2023-09-10
2023-9-20

            */


        //safety check

        $data['sell']['yesterday_in'] =  ($yesterday['orderTotal'] ?? 0);
        $data['sell']['yesterday_abroad'] = 0; //暫


        $data['sell']['today_in'] = $today['orderTotal']  - $data['sell']['yesterday_in'];
        $data['sell']['today_abroad'] = 0 -   $data['sell']['yesterday_abroad']; //暫時無


        $data['sell']['total_in'] = $data['sell']['today_in'] + $data['sell']['yesterday_in'];
        $data['sell']['total_abroad'] =   $data['sell']['today_abroad'] + $data['sell']['yesterday_abroad'];

        $data['sell']['total_cost'] =  $data['sell']['yesterday_cost'] + $data['sell']['today_cost'];
        $data['sell']['total_profit'] = $data['sell']['yesterday_profit'] + $data['sell']['today_profit'];
        $keywords = [
            '中信轉',
            '兆豐轉',
            '玉山轉',
            '一銀轉',
            '瑞興轉',
            '渣打轉',
            '永豐轉',
            '彰銀轉',
            '零用金'
        ];

        $last_cashs = CashFlow::whereDate('date', '<=', $yesterday_date)
            ->whereDate('date', '>=', $mon_first)
            ->where(function ($query) use ($keywords) {
                foreach ($keywords as $key => $keyword) {
                    if ($key == 0)                    $query = $query->where('summary', 'not LIKE', '%' . $keyword . '%');
                    else $query = $query->orWhere('summary', 'not LIKE', '%' . $keyword . '%');
                }
            })
            ->orderBy('created_at', 'desc')
            ->get();


        $today_cashs = CashFlow::whereDate('date', $date)
            ->where(function ($query) use ($keywords) {
                foreach ($keywords as $key => $keyword) {
                    if ($key == 0)                    $query = $query->where('summary', 'not LIKE', '%' . $keyword . '%');
                    else $query = $query->orWhere('summary', 'not LIKE', '%' . $keyword . '%');
                }
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $data['charge']['today_in'] =  $today_cashs->sum('income');
        $data['charge']['today_abroad'] = 0;
        $data['charge']['yesterday_in'] = $last_cashs->sum('income');
        $data['charge']['yesterday_abroad'] = 0;
        $data['charge']['total_in'] = $data['charge']['today_in'] + $data['charge']['yesterday_in'];
        $data['charge']['total_abroad'] =   $data['charge']['today_abroad'] + $data['charge']['yesterday_abroad'];


        $data['receive']['today'] = -1;
        $data['receive']['yesterday'] = -1;
        $data['receive']['total'] = -1;

        $data['handle']['today'] = -1;
        $data['handle']['yesterday'] = -1;
        $data['handle']['total'] = -1;

        $data['pays'] = [];
        $data['summary']['today_pay_cash'] = 0;
        $data['summary']['today_pay_deposit'] = 0;
        $data['summary']['today_pay_handle'] = 0;

        $data['summary']['last_pay_cash'] = 0;
        $data['summary']['last_pay_deposit'] = 0;
        $data['summary']['last_pay_handle'] = 0;


        $accounts = Account::all();


        foreach ($accounts as $account) {
            $last_cash = CashFlow::where('account_id', $account->id)
                ->whereDate('date', '<=', $yesterday_date)

                ->orderBy('created_at', 'desc')
                ->first();
            $today_cashs = CashFlow::where('account_id', $account->id)
                ->whereDate('date', $date)

                ->orderBy('created_at', 'desc')
                ->get();


            $last_remain =  $last_cash->remain ?? 0;
            $add = $today_cashs->sum('income') ?? 0;
            $minus = $today_cashs->sum('pay') ?? 0;
            $totay_remain =  $today_cashs->first()->remain ?? $last_cash->remain ?? 0;


            foreach ($today_cashs as $pay) {
                if ($pay->pay > 0) {
                    if ($account->type === 0 || $account->type == "現金") {
                        $cash = $pay->pay;
                        $deposit = 0;
                    } else {
                        $cash = 0;
                        $deposit = $pay->pay;
                    }
                    $handle = 0;


                    if (!$this->containsKeyword($pay->summary, $keywords)) {
                        $data['pays'][] = [
                            'name' => $pay->summary,
                            'cash' => $cash,
                            'deposit' => $deposit,
                            'handle' => $handle
                        ];

                        $data['summary']['today_pay_cash'] += $cash;
                        $data['summary']['today_pay_deposit'] += $deposit;
                        $data['summary']['today_pay_handle'] += $handle;
                    }
                }
            }



            $data['banks'][] = [
                'name' => $account->name,
                'last_remain' => $last_remain,
                'add' =>     $add,
                'minus' =>   $minus,
                'totay_remain' => $totay_remain
            ];

            $account_last_cashes =  $last_cashs->where('account_id', $account->id)
                ->filter(function ($model) use ($keywords) {
                    if (!$this->containsKeyword($model->summary, $keywords)) return true;
                    else return false;
                });


            //零用金
            if ($account->type === 0 || $account->type == "現金") {
                if (!isset($data['summary']['cash'])) $data['summary']['cash'] = [
                    'last_remain' => 0,
                    'add' =>  0,
                    'minus' =>  0,
                    'totay_remain' => 0,
                ];
                $data['summary']['cash']['last_remain'] +=    $last_remain;
                $data['summary']['cash']['add'] +=  $add;
                $data['summary']['cash']['minus'] += $minus;
                $data['summary']['cash']['totay_remain'] +=  $totay_remain;
                $data['summary']['last_pay_cash'] +=   $account_last_cashes->sum('pay');
            } else {

                if (!isset($data['summary']['bank'])) $data['summary']['bank'] = [
                    'last_remain' => 0,
                    'add' =>  0,
                    'minus' =>  0,
                    'totay_remain' => 0,
                ];
                $data['summary']['bank']['last_remain'] +=    $last_remain;
                $data['summary']['bank']['add'] +=  $add;
                $data['summary']['bank']['minus'] += $minus;
                $data['summary']['bank']['totay_remain'] +=  $totay_remain;
                $data['summary']['last_pay_deposit'] +=   $account_last_cashes->sum('pay');
            }
        }






        return view('report', $data);
    }


    private function containsKeyword($string, $keywords)
    {
        foreach ($keywords as $keyword) {
            if (str_contains($string, $keyword)) {
                return true;
            }
        }
        return false;
    }
}
