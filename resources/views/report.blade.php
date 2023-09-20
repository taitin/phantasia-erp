<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>經營日報表</title>
    <style>
        table {
            font-size: 14pt;
            word-break: keep-all;
            word-wrap: break-word;
        }

        table td {
            height: 20px;
            text-align: right;
        }

        .gray {
            background-color: #D0D0D0;
        }
    </style>
</head>

<body>


    <table border="1" style="width: 100%;max-width:800px">
        <tr>
            <th colspan="9">
                <h3>經營日報表<span style="float: right;font-size:12pt">{{ $date }}</span></h3>
            </th>
        </tr>
        <tr>
            <th colspan="9">銷售</th>
        </tr>

        <tr>
            <th colspan="2">科目</th>
            <th>國內</th>
            <th>國外</th>
            <th>小計</th>
            <th></th>
            <th>銷貨成本(未稅)</th>
            <th>銷貨毛利(未稅)</th>
            <th></th>
        </tr>
        <tr class="gray">
            <th rowspan="3">銷貨</th>
            <th>今日小計</th>
            <td>{{ number_format($sell['today_in']) }}</td>
            <td>{{ number_format($sell['today_abroad']) }}</td>
            <td>{{ number_format($sell['today_in'] + $sell['today_abroad']) }}</td>
            <td></td>
            <td>{{ number_format($sell['today_cost']) }}</td>
            <td>{{ number_format($sell['today_profit']) }}</td>
            <td></td>
        </tr>
        <tr class="gray">
            <th>昨日累計</th>
            <td>{{ number_format($sell['yesterday_in']) }}</td>
            <td>{{ number_format($sell['yesterday_abroad']) }}</td>
            <td>{{ number_format($sell['yesterday_in'] + $sell['yesterday_abroad']) }}</td>
            <td></td>
            <td>{{ number_format($sell['yesterday_cost']) }}</td>
            <td>{{ number_format($sell['yesterday_profit']) }}</td>
            <td></td>
        </tr>
        <tr class="gray">
            <th>今日累計</th>
            <td>{{ number_format($sell['today_in']) }}</td>
            <td>{{ number_format($sell['today_abroad']) }}</td>
            <td>{{ number_format($sell['today_in'] + $sell['today_abroad']) }}</td>
            <td></td>
            <td>{{ number_format($sell['total_cost']) }}</td>
            <td>{{ number_format($sell['total_profit']) }}</td>
            <td></td>
        </tr>

        <tr>
            <th rowspan="3">收款</th>
            <th>今日小計</th>
            <td>{{ number_format($charge['today_in']) }}</td>
            <td>{{ number_format($charge['today_abroad']) }}</td>
            <td>{{ number_format($charge['today_in'] + $charge['today_abroad']) }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>昨日累計</th>
            <td>{{ number_format($charge['yesterday_in']) }}</td>
            <td>{{ number_format($charge['yesterday_abroad']) }}</td>
            <td>{{ number_format($charge['yesterday_in'] + $charge['yesterday_abroad']) }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>今日累計</th>
            <td>{{ number_format($charge['total_in']) }}</td>
            <td>{{ number_format($charge['total_abroad']) }}</td>
            <td>{{ number_format($charge['total_in'] + $charge['total_abroad']) }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="gray">
            <th>應收帳款</th>
            <td></td>
            <td>{{ number_format($receive['today']) }}</td>
            <td>{{ number_format($receive['yesterday']) }}</td>
            <td>{{ number_format($receive['total']) }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th>應付帳款</th>
            <td></td>
            <td>{{ number_format($handle['today']) }}</td>
            <td>{{ number_format($handle['yesterday']) }}</td>
            <td>{{ number_format($handle['total']) }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="5">餘額</th>
            <th colspan="4">支出</th>

        </tr>
        <tr>
            <th>銀行別存款</th>
            <th>昨日餘額</th>
            <th>增加</th>
            <th>減少</th>
            <th>今日餘額</th>
            <th>科目</th>
            <th>零用金</th>
            <th>銀行存款</th>
            <th>應付款</th>

        </tr>

        @for ($key = 0; $key < max(count($banks), count($pays)); $key++)
            <tr>
                <th>{{ $banks[$key]['name'] ?? '' }}</th>
                <td>{{ isset($banks[$key]['last_remain']) ? number_format($banks[$key]['last_remain']) : '' }}</td>
                <td>{{ isset($banks[$key]['add']) ? number_format($banks[$key]['add']) : '' }}</td>
                <td>{{ isset($banks[$key]['minus']) ? number_format($banks[$key]['minus']) : '' }}</td>
                <td>{{ isset($banks[$key]['totay_remain']) ? number_format($banks[$key]['totay_remain']) : '' }}</td>
                @if (isset($pays[$key]))
                    <th class="gray">{{ $pays[$key]['name'] ?? '' }}</th>
                    <td class="gray">{{ number_format($pays[$key]['cash'] ?? 0) }}</td>
                    <td class="gray">{{ number_format($pays[$key]['deposit'] ?? 0) }}</td>
                    <td class="gray">{{ number_format($pays[$key]['handle'] ?? 0) }}</td>
                @else
                    <th class="gray"></th>
                    <td class="gray"></td>
                    <td class="gray"></td>
                    <td class="gray"></td>
                @endif
            </tr>
        @endfor
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="gray"></td>
            <td class="gray"></td>
            <td class="gray"></td>
            <td class="gray"></td>

        </tr>
        <tr>
            <th class="gray">銀行定存</th>
            <td class="gray"></td>
            <td class="gray"></td>
            <td class="gray"></td>
            <td class="gray"></td>
            <th>今日小計</th>
            <td>{{ number_format($summary['today_pay_cash'] ?? 0) }}</td>
            <td>{{ number_format($summary['today_pay_deposit'] ?? 0) }}</td>
            <td>{{ number_format($summary['today_pay_handle'] ?? 0) }}</td>
        </tr>
        <tr>
            <th class="gray">零用金</th>
            <td class="gray">{{ number_format($summary['cash']['last_remain'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['cash']['add'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['cash']['minus'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['cash']['totay_remain'] ?? 0) }}</td>
            <th>昨日累計</th>
            <td>{{ number_format($summary['last_pay_cash'] ?? 0) }}</td>
            <td>{{ number_format($summary['last_pay_deposit'] ?? 0) }}</td>
            <td>{{ number_format($summary['last_pay_handle'] ?? 0) }}</td>
        </tr>
        <tr>
            <th class="gray">手存現金/票據</th>
            <td class="gray">{{ number_format($summary['bank']['last_remain'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['bank']['add'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['bank']['minus'] ?? 0) }}</td>
            <td class="gray">{{ number_format($summary['bank']['totay_remain'] ?? 0) }}</td>
            <th>今日累計</th>
            <td>{{ number_format($summary['last_pay_cash'] + $summary['today_pay_cash']) }}</td>
            <td>{{ number_format($summary['last_pay_deposit'] + $summary['today_pay_deposit']) }}</td>
            <td>{{ number_format($summary['last_pay_handle'] + $summary['today_pay_handle']) }}</td>
        </tr>
        <tr>


        <tr>
            <th>合計</th>
            <td>{{ number_format($summary['cash']['last_remain'] + $summary['bank']['last_remain']) }}</td>
            <td>{{ number_format($summary['cash']['add'] + $summary['bank']['add']) }}</td>
            <td>{{ number_format($summary['cash']['minus'] + $summary['bank']['minus']) }}</td>
            <td>{{ number_format($summary['cash']['totay_remain'] + $summary['bank']['totay_remain']) }}</td>
            <th></th>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>




</body>

</html>
