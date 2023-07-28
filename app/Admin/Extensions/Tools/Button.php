<?php

namespace App\Admin\Extensions\Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Button
{
    public static function make($name, $btn_style = 'primary', $icon = 'circle-thin')
    {
        return '<button style="margin:1px" class="btn btn-' . $btn_style . '"><i class="fa fa-' . $icon . '"></i>' . $name . '</button>';
    }
}
