<?php

namespace App\Models;

use Dcat\Admin\Models\Administrator;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Subpoena extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;


    public function user()
    {
        return $this->belongsTo(Administrator::class, 'user_id');
    }

    public function ledgers()
    {
        return $this->hasMany(Ledger::class);
    }
}
