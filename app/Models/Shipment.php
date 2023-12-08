<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'pos_order_shipment';
    public $timestamps = false;


    public function details()
    {
        return $this->hasMany(ShipmentDetail::class, 'shipmentID', 'id');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shopID', 'shopID');
    }

    public function address()
    {
        return $this->belongsTo(OrderAddress::class, 'addressID', 'id');
    }
}
