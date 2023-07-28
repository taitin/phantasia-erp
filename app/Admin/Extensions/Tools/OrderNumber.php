<?php

namespace App\Admin\Extensions\Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderNumber
{
    public static function generate($dig = 4, $primary_id = 'id', $order_number = 'order_number', $date_purchased = 'created_at', $table = 'orders')
    {
        //202211100001
        $today = date('Ymd');
        $t = DB::table($table)->whereDate($date_purchased, '=', date('Y-m-d'))->orderBy($primary_id, 'DESC')->first();
        //取得今日的最大訂單編號
        if (empty($t) || empty($t->{$order_number})) $number = $today .  str_pad(1, $dig, '0', STR_PAD_LEFT);
        else $number = $today . str_pad((int)substr($t->{$order_number}, 8) + 1, $dig, '0', STR_PAD_LEFT);

        return $number;
    }
}
