<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CashFlow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    //

    public function reportToken(Request $request)
    {
        $date =  $request->date ?? date('Y-m-d');

        return redirect(url('/report/api'), ['date' => $date, 'token' => md5($date . 'phantasia')]);
    }

    public function report(Request $request)
    {
        if ($request->token != md5($request->date . 'phantasia')) abort(404);

        $date =  $request->date ?? date('Y-m-d');
        $data['date'] = $date;
        $yesterday_date  = date('Y-m-d', strtotime("-1 day", strtotime($date)));

        $today_y = date('Y', strtotime($date));
        $today_m = date('m', strtotime($date));
        $today_d = date('d', strtotime($date));

        $yesterday_y = date('Y', strtotime("-1 day", strtotime($date)));
        $yesterday_m = date('m', strtotime("-1 day", strtotime($date)));
        $yesterday_d = date('d', strtotime("-1 day", strtotime($date)));

        $today =  Http::get("https://shipment.phantasia.com.tw/product_flow/get_order_IO?year=$today_y&mon=$today_m&mday=$today_d&type=json")
            ->json();

        if ($today_d == '01' || $today_d == 1) $yesterday = [];
        else $yesterday =  Http::get("https://shipment.phantasia.com.tw/product_flow/get_order_IO?year=$yesterday_y&mon=$yesterday_m&mday=$yesterday_d&type=json")
            ->json();


        //safety check

        $data['sell']['yesterday_in'] =  ($yesterday['orderTotal'] ?? 0) + ($yesterday['ecTotal'] ?? 0);
        $data['sell']['yesterday_abroad'] = 0; //暫

        $data['sell']['today_in'] = $today['orderTotal'] + $today['ecTotal'] - $data['sell']['yesterday_in'];
        $data['sell']['today_abroad'] = 0 -   $data['sell']['yesterday_abroad']; //暫時無

        $data['sell']['today_cost'] = -1;
        $data['sell']['today_profit'] = -1;
        $data['sell']['yesterday_cost'] = -1;
        $data['sell']['yesterday_profit'] = -1;

        $data['sell']['total_in'] = $data['sell']['today_in'] + $data['sell']['yesterday_in'];
        $data['sell']['total_abroad'] =   $data['sell']['today_abroad'] + $data['sell']['yesterday_abroad'];

        $data['sell']['total_cost'] =  $data['sell']['yesterday_cost'] + $data['sell']['today_cost'];
        $data['sell']['total_profit'] = $data['sell']['yesterday_profit'] + $data['sell']['today_profit'];

        $last_cashs = CashFlow::whereDate('date', '<=', $yesterday_date)
            ->whereDate('date', '>=', date('Y-m-01', strtotime($yesterday_date)))
            ->orderBy('created_at', 'desc')
            ->get();


        $today_cashs = CashFlow::whereDate('date', $date)
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
                    $data['pays'][] = [
                        'name' => $pay->comment,
                        'cash' => $cash,
                        'deposit' => $deposit,
                        'handle' => $handle
                    ];

                    $data['summary']['today_pay_cash'] += $cash;
                    $data['summary']['today_pay_deposit'] += $deposit;
                    $data['summary']['today_pay_handle'] += $handle;
                }
            }



            $data['banks'][] = [
                'name' => $account->name,
                'last_remain' => $last_remain,
                'add' =>     $add,
                'minus' =>   $minus,
                'totay_remain' => $totay_remain
            ];

            $account_last_cashes =  $last_cashs->where('account_id', $account->id);
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


        for ($i = 0; $i < 15; $i++) {
            $data['costs'][] = [
                'name' => '員工薪資',
                'cash' => 1000,
                'deposit' => 100,
                'handle' => 100,
            ];
        }





        return view('report', $data);
    }
}
