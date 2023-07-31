<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Account;
use App\Models\Account as ModelsAccount;
use App\Models\Ledger;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AccountController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Account(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('remain');
            $grid->column('comment');
            $grid->column('type');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Account(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('remain');
            $show->field('comment');
            $show->field('type');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Account(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            // $form->text('remain');
            $form->text('comment');
            $form->radio('type')->options((new ModelsAccount())->types)->required();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }



    public function  getCalender(Request $request)
    {
        $ledgers = Ledger::where('due_date', '>', $request->start)
            ->where('due_date', '<', $request->end)
            ->orderBy('due_date', 'asc')->get();


        $events = [];
        $bookings = [];

        foreach ($ledgers  as  $ledger) {
            if ($ledger->pay > 0) {
                $amount = $ledger->pay;
                $color = '#AE0000';
            } else {

                $amount = $ledger->income;
                $color = '#00EC00';
            }
            $events[] = [
                'title' =>  '$' . number_format($amount) . ' ' . $ledger->summary,
                'start' => $ledger->due_date,
                'backgroundColor' => $color,
                'url' => '#',
                'id' => $ledger->id
            ];
        }

        // $events =   array_merge($events);


        return $events;
    }
}
