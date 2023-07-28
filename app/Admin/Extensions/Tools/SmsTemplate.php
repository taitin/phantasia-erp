<?php

namespace App\Admin\Extensions\Tools;

use App\Models\Setting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SmsTemplate
{
    public static function verify($phone)
    {

        $setting = Setting::where('key', 'email_verify')->first();
        $data['sms']['content'] =  strip_tags($setting->value['content']);
        $data['view'] =  OrderToken::registerCode();
        $data['sms']['signature'] = strip_tags($setting->value['signature']);

        return Sms::send($phone, $data['sms']['content'] . ' ' . $data['view'] . ' ' . $data['sms']['signature']);
    }
    public static function registered($phone)
    {

        $setting = Setting::where('key', 'register_success')->first();
        $data['sms']['content'] =  strip_tags($setting->value['content']);
        $data['view'] =  '';
        $data['sms']['signature'] = strip_tags($setting->value['signature']);

        return Sms::send($phone, $data['sms']['content'] . ' ' . $data['view'] . ' ' . $data['sms']['signature']);
    }

    public static function groupCode($phone, $order_product)
    {

        $setting = Setting::where('key', 'group_success_sms')->first();
        $data['sms']['content'] =  strip_tags($setting->value['content']);
        $data['view'] =  '';
        foreach ($order_product->groupCodes->pluck('code') as $code) $data['view'] .= ' ' . $code . ',';
        $data['sms']['signature'] = strip_tags($setting->value['signature']);
        return Sms::send($phone, $data['sms']['content'] . ' ' . $data['view'] . ' ' . $data['sms']['signature']);
    }

    public static function general($phone, $data)
    {
        if (empty($data['email_key'])) throw 'email_key is not allow empty';
        if (empty($data['title'])) throw 'title is not allow empty';

        $setting = Setting::where('key', $data['email_key'])->first();
        $data['email'] = $setting->value;
        if (!empty($data['parameters'])) {
            foreach ($data['parameters'] as $parameter) {
                $data['email']['content'] = str_replace('{' . $parameter['arg'] . '}',  $parameter['value'], $data['email']['content']);
            }
        }

        $data['sms']['title'] =  preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/", " ", strip_tags($data['title']));
        $data['sms']['content'] =   preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/", " ", strip_tags($data['email']['content']));
        $data['sms']['signature'] = preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/", " ", strip_tags($data['email']['signature']));
        Log::debug($data);
        return Sms::send($phone, $data['sms']['title'] . ':' . $data['sms']['content'] . ' ' . $data['sms']['signature']);
    }
}
