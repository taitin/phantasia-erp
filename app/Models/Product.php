<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'pos_product';


    public function currentAmount()
    {
        return $this->belongsTo(ProductCurrentAmount::class, 'productID', 'productID')->where('shopID', 0);
    }
}
