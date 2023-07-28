<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(Subject::class);
    }
    public function getSubjectAttribute()
    {

        if ($this->category)
            return $this->category->code . $this->category->name;
        else return '';
    }

    public function getDateSummaryAttribute($value)
    {
        return $this->date . ' ' . $this->summary;
    }
}
