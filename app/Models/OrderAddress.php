<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'pos_order_address';
    public $timestamps = false;

}
