<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\LedgerTable;
use App\Admin\Repositories\CashFlow;
use App\Models\Account;
use App\Models\CashFlow as ModelsCashFlow;
use App\Models\Ledger;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CashFlowController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CashFlow(['account']), function (Grid $grid) {
            $grid->model()->orderBy('id', 'DESC');
            if (request()->account_id) {

                $account = Account::find(request()->account_id);
                $grid->header('<h2>' . $account->name . ' 餘額: ' . $account->remain .  '</h2>');
            } else {
                $accounts = Account::all();
                $total = 0;
                foreach ($accounts as $account) {

                    $total += $account->remain;
                }
                $grid->header('<h2>全部現金餘額: ' . $total .  '</h2>');
            }
            // $grid->column('id')->sortable();
            $grid->column('date')->sortable();
            $grid->column('summary')->sortable();
            $grid->column('income')->sortable();
            $grid->column('pay')->sortable();
            $grid->column('account.name')->sortable();
            $grid->column('comment')->sortable();
            $grid->column('ledgers')->display(function ($value) {
                if ($this->ledgers)
                    return $this->ledgers->pluck('summary');
            })->implode('<br/>');
            // $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->tools('<a href="' . admin_url('cash-flows') . '" class="btn btn-primary disable-outline">全部</a>');

            $accounts = Account::all();
            foreach ($accounts as $account) {
                $grid->tools('<a href="' . admin_url('cash-flows?account_id=' . $account->id) . '" class="btn btn-primary disable-outline">' . $account->name . '</a>');
            }
            $grid->actions(function ($action) {

                $action->disableEdit();
                $action->disableQuickEdit(false);
            });
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('summary');
                $filter->equal('account_id')->select(Account::all()->pluck('name', 'id'));
                $filter->like('comment');
                $filter->expand(false);
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
        return Show::make($id, new CashFlow(), function (Show $show) {
            $show->field('id');
            $show->field('date');
            $show->field('summary');
            $show->field('income');
            $show->field('pay');
            $show->field('account_id');
            $show->field('comment');
            $show->field('ledger_id');
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
        return Form::make(new CashFlow(), function (Form $form) {
            $form->display('id');
            $form->date('date')->required();
            $form->text('summary')->required();
            $form->number('income')->default(0)->required();
            $form->number('pay')->default(0)->required();
            $form->select('account_id')->required()->options(Account::all()->pluck('name', 'id'));
            $form->text('comment');

            $form->multipleSelectTable('ledger_id')
                ->title('選擇分類帳')
                ->dialogWidth('50%') // 弹窗宽度，默认 800px
                ->from(LedgerTable::make()) // 设置渲染类实例，并传递自定义参数
                // ->model(Ledger::class,'id','summary');
                ->options(function ($v) { // 设置编辑数据显示
                    if (!$v) {
                        return [];
                    }
                    $ledger = Ledger::find($v)->pluck('date_summary', 'id');
                    return $ledger;
                })->pluck('summary', 'id'); // 第一个参数为显示的字段，第二个参数为选中后将保存到表单的字段


            $form->saving(function ($form) {


                // $form->ledger_id = explode(',', $form->ledger_id);
            });


            $form->display('created_at');
            $form->display('updated_at');
            $form->saved(function ($form) {
                $form->repository()->model()->account->updateRemain();
                // $cash_flow = ModelsCashFlow::find($id);
                // $cash_flow->account->updateRemain();
            });
        });
    }
}
