<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ShipmentDetail extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'pos_order_shipment_detail';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'sProductID', 'productID');
    }


    public function orderProduct()
    {

        return $this->belongsTo(OrderDetail::class, 'rowID', 'id');
    }
}
