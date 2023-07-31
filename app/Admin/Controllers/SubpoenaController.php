<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\Tools\OrderNumber;
use App\Admin\Repositories\Subpoena;
use App\Models\Ledger;
use App\Models\Subpoena as ModelsSubpoena;
use App\Options\Subjects;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Models\Administrator;

class SubpoenaController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Subpoena(['user']), function (Grid $grid) {
            $grid->model()->orderBy('date', 'desc');
            // $grid->column('id')->sortable();
            $grid->column('number')->sortable();
            $grid->column('date')->sortable();

            $grid->column('user.name', __('subpoena.fields.name'))->sortable();
            $grid->column('borrow')->sortable();
            $grid->column('loan')->sortable();

            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('number');
                $filter->equal('user_id')->select(Administrator::all()->pluck('name', 'id'));
                $filter->group('borrow', function ($group) {
                    $group->gt('大於');
                    $group->lt('小於');
                    $group->equal('等於');
                });
                $filter->group('loan', function ($group) {
                    $group->gt('大於');
                    $group->lt('小於');
                    $group->equal('等於');
                });
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
        return Show::make($id, new Subpoena(['user']), function (Show $show) {
            $show->field('id');
            $show->field('number');
            $show->field('date');

            $show->field('user.name');
            $show->field('borrow');
            $show->field('loan');
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
        return Form::make(new Subpoena(['ledgers']), function (Form $form) {
            $form->display('id');
            $form->text('number')->readOnly();
            $form->date('date')->required();

            $form->hidden('user_id')->default(0);
            $form->hidden('user_id')->default(0);
            $form->hidden('borrow')->default(0);
            $form->hidden('loan')->default(0);

            $form->hasMany('ledgers', __('ledger.labels.Ledger'), function (Form\NestedForm $form) {
                $form->select('category_id', __('ledger.fields.category_id'))->options(Subjects::get())->required()->width(2);
                $form->date('due_date', __('ledger.fields.due_date'))->width(1);
                $form->text('summary', __('ledger.fields.summary'))->required()->width(2);
                $form->number('income', __('ledger.fields.income'))->width(2);
                $form->number('pay', __('ledger.fields.pay'))->width(2);
                $form->text('invoice', __('ledger.fields.invoice'))->width(2);
                $form->hidden('date', __('ledger.fields.date'))->width(1);
            })->useTable()->width(12, 0);

            $form->submitted(function ($form) {

                if ($form->isCreating()) {
                    $form->number = 'initial';
                    $form->user_id = Admin::user()->id;
                }
                $borrow = 0;
                $loan = 0;

                foreach (Request()->ledgers as $ledger) {
                    $borrow += $ledger['income'] ?? 0;
                    $loan += $ledger['pay'] ?? 0;
                }
                if ($borrow != $loan) {
                    return $form->response()->error('借貸金額不符合');
                }
                $form->borrow = $borrow;
                $form->loan = $loan;
            });
            $style = <<<STYLE
            .table tr td:first-child{
                    min-width:350px;
            }
            .table tr td:nth-child(2) input{
                width:100px !important;
        }
            .table tr td:nth-child(3) input{
                min-width:350px !important;
            }
            .table tr td:nth-child(4) input{
                width:80px !important;
        }
        .table tr td:nth-child(5) input{
            width:80px !important;
    }
    .table tr td:nth-child(6) input{
        width:100px !important;
        }


STYLE;
            Admin::style($style);

            $form->saved(function ($form) {
                $id = $form->getKey();
                $data =      ModelsSubpoena::find($id);
                if ($data->number == 'initial') {
                    $data->number = OrderNumber::generate(4, 'id', 'number', 'date', 'subpoenas', date('Ymd', strtotime($data->date)));
                    $data->save();
                }
                $ledgers =  Ledger::where('subpoena_id', $form->model()->id)->get();
                foreach ($ledgers as $ledger) {
                    $ledger->date = $form->model()->date;
                }
            });





            $form->deleted(function (Form $form, $result) {
                $id = $form->getKey();
                $ledgers =  Ledger::where('subpoena_id', $id)->get();
                foreach ($ledgers as $ledger) {
                    $ledger->delete();
                }
            });





            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
