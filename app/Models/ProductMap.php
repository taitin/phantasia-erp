<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ProductMap extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'pos_product_map';

    public function productByKy()
    {
        return $this->belongsTo(Product::class, 'ky', 'productNum');
    }

    public function productByPh()
    {
        return $this->belongsTo(Product::class, 'phantasia', 'productNum');
    }
}
