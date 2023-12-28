<?php

return [
    'APIKey' => '2bf3b310eed75465b22b9d2a2c939654',
    'cusID' => 77011,
    // 'APIKey' => '57751b84f00f05dfc1734ee9714d1f68',
    // 'cusID' => '04092',
    'url' => 'https://ky.astertech.com.tw/order_api/ky_order_api.jsp',
    'cusName' => '幻遊天下股份有限公司',
    'attributes' => [
        'xsi:schemaLocation' => 'urn:KYYO:API:ORDER:1.0 ORDER.xsd',
        'xmlns' => 'urn:KYYO:API:ORDER:1.0',
        'xmlns:xsi' => "http://www.w3.org/2001/XMLSchema-instance"
    ],
    'errcode' => [
        "E00" => "APIKey 空值 (必填欄位,不可為空值) 或 驗證碼有誤",
        "E01" => "cusID 空值 (必填欄位,不可為空值) 或 客戶代號不存在",
        "E02" => "cusName 空值 (必填欄位,不可為空值)",
        "E03" => "serviceType 值必須為 1 或 3",
        "E04" => "orderType 值必須為 A01、A02、A05、A06、A11、A12",
        "E05" => "orderID 空值 (必填欄位,不可為空值)",
        "E06" => "shippingID 空值 (必填欄位,不可為空值)",
        "E07" => "orderAmount 空值 (必填欄位,不可為空值) 或 非數字",
        "E08" => "rvName 空值 (必填欄位,不可為空值)",
        "E09" => "rvMobile 空值 (必填欄位,不可為空值)",
        "E10" => "prodID 空值 (必填欄位,不可為空值)",
        "E11" => "prodName 空值 (必填欄位,不可為空值)",
        "E12" => "prodQty 空值 (必填欄位,不可為空值) 或 非數字",
        "E20" => "stType、stCode、stName 需要填寫當 orderType 是 A01 或 A02",
        "E21" => "stType 值必須為 S11、F 當 orderType 是 A01 或 A02",
        "E30" => "rvZip、rvAddr 不能為空值 當 orderType 是 A05 或 A06",
        "E40" => "八個欄位 packageLength, packageWidth, packageHeight, packageWeight, deliveryCountry, invoiceTitle, invoiceAmount, prodPrice 不能為空 當 orderType 是 A11 或 A12",
        "E41" => "packageLength, packageWidth, packageHeight, packageWeight 必須為數字 當 orderType 是 A11 或 A12",
        "E71" => "cusName 超過最大長度",
        "E72" => "orderID 超過最大長度",
        "E73" => "shippingID 超過最大長度",
        "E74" => "memberID, memberName 超過最大長度",
        "E75" => "收件人，地址，電話有誤",
        "E76" => "超商代碼超商名稱有誤",
        "E77" => "supplierID, supplierEmail 超過最大長度",
        "E78" => "deliveryCountry 超過最大長度",
        "E79" => "prodID 超過最大長度",
        "E80" => "prodName 超過最大長度",
        "E98" => "XML 內容不明錯誤",
        "E99" => "XML 格式錯誤"
    ]

];
