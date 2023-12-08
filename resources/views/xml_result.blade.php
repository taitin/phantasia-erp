<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>傳送結果</title>
</head>

<body>

    @if ($result)
        <script>
            parent.location.reload();
        </script>
    @else
        <div style="color:red; font-size:35px">{{ $err }}<br />請修改後重新傳送</div>
    @endif



</body>

</html>
