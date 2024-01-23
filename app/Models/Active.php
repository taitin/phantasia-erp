<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
    public $table = 'activies';

    protected $casts = ['secs' => 'json', 'footers' => 'json'];


    public function getUrlAttribute()
    {

        $segment = $this->slug ?? $this->id;
        $url = 'https://phantasia.tw/active/show/' . $segment;
        return $url;
    }
}
