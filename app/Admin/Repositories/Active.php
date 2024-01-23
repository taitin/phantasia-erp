<?php

namespace App\Admin\Repositories;

use App\Models\Active as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Active extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
