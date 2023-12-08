<?php

namespace App\Admin\Repositories;

use App\Models\Shipment as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Shipment extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
