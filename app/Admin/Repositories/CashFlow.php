<?php

namespace App\Admin\Repositories;

use App\Models\CashFlow as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CashFlow extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
