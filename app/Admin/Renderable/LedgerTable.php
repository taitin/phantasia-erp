<?php

namespace App\Admin\Renderable;

use App\Models\Ledger;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class LedgerTable extends LazyRenderable
{
    public function grid(): Grid
    {
        // 获取外部传递的参数
        $id = $this->id;

        return Grid::make((new Ledger())->with('category'), function (Grid $grid) {
            $grid->column('id');
            $grid->column('date');
            $grid->column('code');
            $grid->column('subject')->display(function () {
                return $this->subject;
            });
            $grid->column('summary');
            $grid->column('created_at');
            $grid->column('updated_at');
            $grid->quickSearch(['date', 'category.code', 'category.name']);

            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('username')->width(4);
                $filter->like('name')->width(4);
            });
        });
    }
}
