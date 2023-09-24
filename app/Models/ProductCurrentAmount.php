<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCurrentAmount extends Model
{
    use HasFactory;
    public $table = 'pos_current_amount';
}
