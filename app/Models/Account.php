<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    public $types = ['現金', '銀行', '第三方支付', '其他'];

    public function  getTypeAttribute($value)
    {
        return $this->types[$value] ?? '';
    }


    public function updateRemain()
    {
        $income = DB::table('cash_flows')->where('account_id', $this->id)->sum('income');
        $pay = DB::table('cash_flows')->where('account_id', $this->id)->sum('pay');

        $this->remain = $income - $pay;
        $this->save();
    }
}
