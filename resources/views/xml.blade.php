<form method="post" action="{{ $url }}">
    <input type="hidden" name="web_order_xml" value='{!! $xml !!}'>
    <input id ="button" type="submit" value="">
</form>

<script>
    // Select the button using its CSS selector
    var button = document.getElementById('button'); // Replace 'button' with the appropriate selector for your button
    // Click the button
    button.click();
</script>
