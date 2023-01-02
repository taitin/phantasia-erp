<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use PDO;

class CashFlow extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $casts = ['ledger_id' => 'json'];


    protected $table = 'cash_flows';

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function getLedgersAttribute()
    {
        if ($this->ledger_id) {

            return Ledger::whereIn('id', $this->ledger_id)->get();
        } else return '';
    }
}
