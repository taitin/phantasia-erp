<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'pos_order_detail';
    public $timestamps = false;
}
