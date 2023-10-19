<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>明細</title>
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

    <table border="1" style="width: 100%;">
        <tr>
            <th>日期</th>
            <th>摘要</th>
            <th>數量</th>
            <th>金額</th>
            <th>成本</th>
            <th>毛利</th>
            <th>毛利率</th>
        </tr>
        @php
            $num = 0;
            $amount = 0;
            $cost = 0;
        @endphp
        @foreach ($list as $item)
            @php
                $num += $item['num'] ?? 1;
                $amount += $item['amount'];
                $cost += $item['cost'];

            @endphp
            <tr>
                <td>{{ $item['date'] }}</td>
                <td>{{ $item['summary'] }}</td>
                <td>{{ $item['num'] ?? 1 }}</td>
                <td>{{ $item['amount'] }}</td>
                <td>{{ $item['cost'] }}</td>
                <td>{{ $item['profit'] }}</td>
                @if ($item['amount'] != 0)
                    <td>{{ ($item['profit'] * 100) / $item['amount'] }}</td>
                @else
                    <td>{{ ($item['profit'] * 100) / $item['amount'] }}</td>
                @endif
            </tr>
        @endforeach
        <tr>
            <th>期間</th>
            <th>總計</th>
            <th>總數量</th>
            <th>總金額</th>
            <th>總成本</th>
            <th>總毛利</th>
            <th></th>


        </tr>
        <tr>
            <th>{{ $item['date'] }}</th>
            <th>總計</th>
            <th>{{ $num }}</th>
            <th>{{ $amount }}</th>
            <th>{{ $cost }}</th>
            <th>{{ $amount - $cost }}</th>


        </tr>
        <tr>
            <th>{{ $item['date'] }}</th>
            <th>總計</th>
            <th>{{ $num }}</th>
            <th>{{ $amount * 1.05 }}</th>
            <th></th>
        </tr>
    </table>

</body>

</html>
