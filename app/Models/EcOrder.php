<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class EcOrder extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'pos_ec_order';

    protected $primaryKey = 'ECID';

    public $timestamps = false;
    ///ECstatus -1.不出貨, 1待出貨,2貨物運送中 3.貨品抵達 4.待取貨 5.已完成取貨 6.退貨 7.取消訂單 8.準備中

}
