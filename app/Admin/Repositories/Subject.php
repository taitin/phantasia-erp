<?php

namespace App\Admin\Repositories;

use App\Models\Subject as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Mockery\Matcher\Subset;

class Subject extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
