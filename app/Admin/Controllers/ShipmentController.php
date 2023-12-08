<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Shipment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ShipmentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Shipment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('shipmentCode');
            $grid->column('status');
            $grid->column('shopID');
            $grid->column('shippingTime');
            $grid->column('shippingNum');
            $grid->column('total');
            $grid->column('type');
            $grid->column('shipmentComment');
            $grid->column('arriveTime');
            $grid->column('charge');
            $grid->column('note');
            $grid->column('addressID');
            $grid->column('shipmentFee');
            $grid->column('profit');
            $grid->column('boxTime');
            $grid->column('finishTime');
            $grid->column('boxNum');
            $grid->column('createTime');
            $grid->column('payway');
            $grid->column('invoiceDetail');
            $grid->column('hidePrice');
            $grid->column('assignDate');
            $grid->column('assignT');
            $grid->column('account');
            $grid->column('discount');
            $grid->column('tcgTotal');
        
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
        return Show::make($id, new Shipment(), function (Show $show) {
            $show->field('id');
            $show->field('shipmentCode');
            $show->field('status');
            $show->field('shopID');
            $show->field('shippingTime');
            $show->field('shippingNum');
            $show->field('total');
            $show->field('type');
            $show->field('shipmentComment');
            $show->field('arriveTime');
            $show->field('charge');
            $show->field('note');
            $show->field('addressID');
            $show->field('shipmentFee');
            $show->field('profit');
            $show->field('boxTime');
            $show->field('finishTime');
            $show->field('boxNum');
            $show->field('createTime');
            $show->field('payway');
            $show->field('invoiceDetail');
            $show->field('hidePrice');
            $show->field('assignDate');
            $show->field('assignT');
            $show->field('account');
            $show->field('discount');
            $show->field('tcgTotal');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Shipment(), function (Form $form) {
            $form->display('id');
            $form->text('shipmentCode');
            $form->text('status');
            $form->text('shopID');
            $form->text('shippingTime');
            $form->text('shippingNum');
            $form->text('total');
            $form->text('type');
            $form->text('shipmentComment');
            $form->text('arriveTime');
            $form->text('charge');
            $form->text('note');
            $form->text('addressID');
            $form->text('shipmentFee');
            $form->text('profit');
            $form->text('boxTime');
            $form->text('finishTime');
            $form->text('boxNum');
            $form->text('createTime');
            $form->text('payway');
            $form->text('invoiceDetail');
            $form->text('hidePrice');
            $form->text('assignDate');
            $form->text('assignT');
            $form->text('account');
            $form->text('discount');
            $form->text('tcgTotal');
        });
    }
}
