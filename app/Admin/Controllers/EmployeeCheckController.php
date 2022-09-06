<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EmployeeCheck;
use App\Models\AdminUser;
use App\Models\EmployeeCheck as ModelsEmployeeCheck;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

class EmployeeCheckController extends AdminController
{

    public function title()
    {
        // labels翻译示例，最终翻译成 “用户中心”
        return '雇員打卡';
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {



        return Grid::make(new EmployeeCheck(['admin_user']), function (Grid $grid) {
            $admin_user_id = Admin::user()->id;
            if ($admin_user_id !== 1) {

                $grid->model()->where('admin_user_id', $admin_user_id);
            }
            $grid->column('id')->sortable();
            $grid->column('timestamp', __('Check timestamp'));
            $grid->column('admin_user.name', __('Name'));

            $grid->export();
            // xlsx
            $grid->export()->xlsx();
            // $grid->column('is_attach')->bool();
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->between('timestamp');
                $filter->equal('admin_user.name', __('Name'));
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
        return Show::make($id, new EmployeeCheck(), function (Show $show) {
            $show->field('id');
            $show->field('timestamp');
            $show->field('is_attach');
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
        return Form::make(new EmployeeCheck(), function (Form $form) {
            $form->display('id');
            $form->text('timestamp', __('Check timestamp'))->default(date('Y-m-d H:i:s'))->readOnly();
            // $form->checkbox('is_attach');
            $form->hidden('admin_user_id')->default(Admin::user()->id);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
