<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Active;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ActiveController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Active(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('description');
            $grid->column('keywords');
            $grid->column('og_image')->image();
            $grid->column('start');
            $grid->column('end');
            $grid->column('url')->display(function () {
                return $this->url;
            })->link();
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();

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
        return Show::make($id, new Active(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('keywords');
            $show->field('og_image');
            $show->field('secs');
            $show->field('footers');
            $show->field('content');
            $show->field('start');
            $show->field('end');
            $show->field('wait');
            $show->field('iframe');
            $show->field('iframe_height');
            $show->field('slug');
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
        return Form::make(new Active(), function (Form $form) {
            $form->text('title')->required();
            $form->textarea('description');
            $form->text('keywords');
            $form->html('關鍵字請以,分隔');
            $form->image('og_image')->autoUpload();
            $form->table('secs', function ($table) {
                $table->image('image', '圖片')->autoUpload();
            });
            $form->editor('content');
            $form->table('footers', function ($table) {
                $table->image('image', '圖片')->autoUpload();
            });
            $form->datetime('start')->default(date('Y-m-d H:i:s'));
            $form->datetime('end')->default('2035-01-01');
            $form->text('wait');
            $form->text('iframe');
            $form->text('iframe_height');
            $form->hidden('id'); // id 設定為隱藏欄位，這個是重點
            $form->text('slug')->placeholder('請輸入一個英文或數字，如televesion')
                ->rules('unique:activies,slug,' . request()->input('id') . ',id');


            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
