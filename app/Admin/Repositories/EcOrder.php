<?php

namespace App\Admin\Repositories;

use App\Models\EcOrder as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EcOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
