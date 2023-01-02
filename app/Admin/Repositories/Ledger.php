<?php

namespace App\Admin\Repositories;

use App\Models\Ledger as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Ledger extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
