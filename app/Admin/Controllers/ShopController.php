<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Shop;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ShopController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Shop(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('licenceCode');
            $grid->column('name');
            $grid->column('dirtyBit');
            $grid->column('lastUpdate');
            $grid->column('buffering');
            $grid->column('offset');
            $grid->column('consignmentStatus');
            $grid->column('discount');
            $grid->column('email');
            $grid->column('shipmentStatus');
            $grid->column('distributeType');
            $grid->column('show');
            $grid->column('handShake');
            $grid->column('handShakeSign');
            $grid->column('jointype');
            $grid->column('cashType');
            $grid->column('shipOut');
            $grid->column('lastBuffer');
            $grid->column('fireData');
            $grid->column('tableNum');
            $grid->column('holiday');
            $grid->column('showPrice');
            $grid->column('level');
            $grid->column('shopLogin');
        
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
        return Show::make($id, new Shop(), function (Show $show) {
            $show->field('id');
            $show->field('licenceCode');
            $show->field('name');
            $show->field('dirtyBit');
            $show->field('lastUpdate');
            $show->field('buffering');
            $show->field('offset');
            $show->field('consignmentStatus');
            $show->field('discount');
            $show->field('email');
            $show->field('shipmentStatus');
            $show->field('distributeType');
            $show->field('show');
            $show->field('handShake');
            $show->field('handShakeSign');
            $show->field('jointype');
            $show->field('cashType');
            $show->field('shipOut');
            $show->field('lastBuffer');
            $show->field('fireData');
            $show->field('tableNum');
            $show->field('holiday');
            $show->field('showPrice');
            $show->field('level');
            $show->field('shopLogin');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Shop(), function (Form $form) {
            $form->display('id');
            $form->text('licenceCode');
            $form->text('name');
            $form->text('dirtyBit');
            $form->text('lastUpdate');
            $form->text('buffering');
            $form->text('offset');
            $form->text('consignmentStatus');
            $form->text('discount');
            $form->text('email');
            $form->text('shipmentStatus');
            $form->text('distributeType');
            $form->text('show');
            $form->text('handShake');
            $form->text('handShakeSign');
            $form->text('jointype');
            $form->text('cashType');
            $form->text('shipOut');
            $form->text('lastBuffer');
            $form->text('fireData');
            $form->text('tableNum');
            $form->text('holiday');
            $form->text('showPrice');
            $form->text('level');
            $form->text('shopLogin');
        });
    }
}
