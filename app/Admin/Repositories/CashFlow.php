<?php

namespace App\Admin\Repositories;

use App\Models\CashFlow as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CashFlow extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

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
