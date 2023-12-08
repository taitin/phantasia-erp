<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EcOrder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class EcOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EcOrder(), function (Grid $grid) {
            $grid->column('ECID')->sortable();
            $grid->column('platformID');
            $grid->column('ECOrderNum');
            $grid->column('ECstatus');
            $grid->column('orderID');
            $grid->column('updateTime');
            $grid->column('transportID');
            $grid->column('trackingNumber');
            $grid->column('invoiceID');
            $grid->column('charge');
            $grid->column('note');
            $grid->column('receiverName');
            $grid->column('receiverPhone');
            $grid->column('receiverAddress');
            $grid->column('payway');
            $grid->column('email');
            $grid->column('remark');
            $grid->column('memberID');
            $grid->column('comID');
            $grid->column('CarrierType');
            $grid->column('CarrierId1');
            $grid->column('NPOBAN');
            $grid->column('boxTime');
            $grid->column('finishTime');
            $grid->column('boxNum');
            $grid->column('sendingTime');
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('ECID');
        
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
        return Show::make($id, new EcOrder(), function (Show $show) {
            $show->field('ECID');
            $show->field('platformID');
            $show->field('ECOrderNum');
            $show->field('ECstatus');
            $show->field('orderID');
            $show->field('updateTime');
            $show->field('transportID');
            $show->field('trackingNumber');
            $show->field('invoiceID');
            $show->field('charge');
            $show->field('note');
            $show->field('receiverName');
            $show->field('receiverPhone');
            $show->field('receiverAddress');
            $show->field('payway');
            $show->field('email');
            $show->field('remark');
            $show->field('memberID');
            $show->field('comID');
            $show->field('CarrierType');
            $show->field('CarrierId1');
            $show->field('NPOBAN');
            $show->field('boxTime');
            $show->field('finishTime');
            $show->field('boxNum');
            $show->field('sendingTime');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new EcOrder(), function (Form $form) {
            $form->display('ECID');
            $form->text('platformID');
            $form->text('ECOrderNum');
            $form->text('ECstatus');
            $form->text('orderID');
            $form->text('updateTime');
            $form->text('transportID');
            $form->text('trackingNumber');
            $form->text('invoiceID');
            $form->text('charge');
            $form->text('note');
            $form->text('receiverName');
            $form->text('receiverPhone');
            $form->text('receiverAddress');
            $form->text('payway');
            $form->text('email');
            $form->text('remark');
            $form->text('memberID');
            $form->text('comID');
            $form->text('CarrierType');
            $form->text('CarrierId1');
            $form->text('NPOBAN');
            $form->text('boxTime');
            $form->text('finishTime');
            $form->text('boxNum');
            $form->text('sendingTime');
        });
    }
}
