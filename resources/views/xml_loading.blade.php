<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>傳送到凱耀物流</title>
    <style>
        iframe {
            border: none;
        }
    </style>
</head>

<body>


    @if ($sended)
        <h3>已成單送到凱耀物流，點選確認後關閉</h3>
    @else
        <h3>正在傳送中到凱耀物流中....<img src="/images/loading.gif"></h3>
        <iframe border=0 src="{{ url('api/go_ky_order?shipmentID=' . $shipmentID) }}"></iframe>;
    @endif


</body>

</html>
