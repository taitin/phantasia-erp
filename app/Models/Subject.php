<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasDateTimeFormatter;
    public function parent()
    {
        return $this->belongsTo(Subject::class);
    }


    public function saveCode()
    {
        if ($this->parent) {
            $this->code = $this->parent->code . $this->sub_code;
        } else $this->code = $this->sub_code;

        $this->save();
    }
}
