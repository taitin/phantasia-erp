<?php

namespace App\Admin\Extensions\Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Sms
{
    public static function send($phone, $text)
    {
        if (strlen($phone) != 10) return ['result' => false, 'msg' => '電話長度不符'];
        if (empty($text)) return ['result' => false, 'msg' => '文字不可為空'];
        // https://smsapi.mitake.com.tw/api/mtk/SmSend?CharsetURL=UTF-8

        $curl = curl_init();
        // url
        $url = config('taiwan_sms.services.mitake.url');
        // parameters
        $data = 'username=' . config('taiwan_sms.services.mitake.username');
        $data .= '&password=' . config('taiwan_sms.services.mitake.password');
        $data .= '&dstaddr=' . $phone;
        $data .= '&smbody=' . $text;

        // Log::debug($url);
        // Log::debug($data);

        // 設定curl網址
        curl_setopt($curl, CURLOPT_URL, $url);
        // 設定Header
        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array("Content-type: application/x-www-form-urlencoded")
        );
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 執行
        ob_start();
        $output = curl_exec($curl);

        $fin = ob_get_contents();

        curl_close($curl);
        ob_end_clean();
        // dd($fin);

        // sLog::debug($fin);
        $err =  substr(strstr($fin, 'Error='), 6);
        if (!empty($err)) return ['result' => false, 'msg' => $err];
        $data = explode("\r\n", substr(strstr($fin, '[1]'), 3));
        foreach ($data as $row) {
            if (empty($row)) continue;
            else {
                $r = explode('=', $row);
                $msg[$r[0]] = $r[1];
            }
        }
        return ['result' => true, 'msg' => $msg ?? ''];
    }
}
