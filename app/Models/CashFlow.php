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

    public function updateRemain()
    {

        $cash_flow = CashFlow::where('date',  $this->date)
            ->where('account_id', $this->account_id)
            ->where('id', '<', $this->id)
            ->orderBy('id', 'DESC')
            ->first();
        if (empty($cash_flow)) {
            $cash_flow  =  CashFlow::where('date', '<', $this->date)
                ->where('account_id', $this->account_id)
                ->orderBy('date', 'DESC')
                ->orderBy('id', 'DESC')
                ->first();
        }
        $remain = $cash_flow->remain ?? 0;
        $org_remain = $this->remain;
        $this->remain = $remain + $this->income - $this->pay;
        $this->save();

        if ($org_remain != $this->remain) {
            $this->updateRelateRemain();
        }
    }

    public function updateRelateRemain($id = '', $date = '', $account_id = ' ')
    {
        $id = $id ?? $this->id;
        $date = $date ?? $this->date;
        $account_id = $account_id ?? $this->account_id;

        $cash_flows =   CashFlow::where('date', '>=', $date)
            ->where('account_id', $account_id)
            ->orderBy('date', 'ASC')
            ->orderBy('id', 'ASC')
            ->get();
        dump($id);
        dump($date);
        dd($account_id);

        foreach ($cash_flows as $cash) {
            $key = false;
            if ($cash->date == $date) {
                if ($cash->id > $id) $key = true;
            } else {
                $key = true;
            }
            if ($key) $cash->updateRemain();
        }
    }
}
