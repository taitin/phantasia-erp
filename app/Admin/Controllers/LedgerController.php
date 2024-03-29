<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Ledger;
use App\Models\Ledger as ModelsLedger;
use App\Options\Subjects;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LedgerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Ledger(), function (Grid $grid) {
            $grid->model()->orderBy('id', 'DESC');
            $grid->column('id')->sortable();
            $grid->column('date');
            $grid->column('summary');
            $grid->column('invoice');
            $grid->column('income')->sumTotal();;
            $grid->column('pay');
            $grid->column('category_id')->display(function () {
                return $this->subject;
            });
            $grid->column('balance');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();


            $grid->header(function ($collection) use ($grid) {
                $query = ModelsLedger::query();

                // 拿到表格筛选 where 条件数组进行遍历
                $grid->model()->getQueries()->unique()->each(function ($value) use (&$query) {
                    if (in_array($value['method'], ['paginate', 'get', 'orderBy', 'orderByDesc'], true)) {
                        return;
                    }

                    $query = call_user_func_array([$query, $value['method']], $value['arguments'] ?? []);
                });

                // 查出统计数据
                $data = $query->get();
                $income = 0;
                $pay = 0;

                foreach ($data as $row) {
                    $income += $row->income;
                    $pay += $row->pay;
                }

                $remain = $income - $pay;
                return "<h2>總收入 ： $income 總支出 ： $pay 結餘:  $remain</h2> ";
            });
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('summary');
                $filter->equal('category_id')->select(Subjects::get());
                $filter->like('invoice');
                $filter->between('date')->date();
                $filter->group('income', function ($group) {
                    $group->nlt('大於');
                    $group->ngt('小於');
                    $group->equal('等於');
                });
                $filter->group('pay', function ($group) {
                    $group->nlt('大於');
                    $group->ngt('小於');
                    $group->equal('等於');
                });



                $filter->like('invoice');
            });
            // $grid->quickCreate(function ($form) {

            //     $form = $this->form();
            // });
            $grid->actions(function ($action) {

                $action->disableEdit();
                $action->disableQuickEdit(false);
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
        return Show::make($id, new Ledger(), function (Show $show) {
            $show->field('id');
            $show->field('date');
            $show->field('summary');
            $show->field('invoice');
            $show->field('income');
            $show->field('pay');
            $show->field('category_id');
            $show->field('balance');
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
        return Form::make(new Ledger(), function (Form $form) {
            $form->display('id');
            $form->date('date');
            $form->text('summary')->required();
            $form->text('invoice');
            $form->number('income');
            $form->number('pay');
            $form->select('category_id')->options(Subjects::get())->required();
            $form->display('balance');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
