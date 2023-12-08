<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'pos_sub_branch';
    public $timestamps = false;

}
