<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Subject;
use App\Models\Subject as ModelsSubject;
use App\Options\Subjects;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SubjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Subject(), function (Grid $grid) {
            $grid->column('name');
            $grid->column('parent_id');
            $grid->column('code');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('name');
                $filter->like('code');
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
        return Show::make($id, new Subject(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('parent_id');
            $show->field('code');
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
        return Form::make(new Subject(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->select('parent_id')->options(Subjects::get());
            $form->text('sub_code')->required();

            $form->display('code');

            $form->display('created_at');
            $form->display('updated_at');

            $form->saved(function ($form) {
                $subject = ModelsSubject::find($form->repository()->model()->id);
                $subject->saveCode();
            });
        });
    }
}
