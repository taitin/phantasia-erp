<?php

namespace App\Admin\Repositories;

use App\Models\Subpoena as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Subpoena extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
