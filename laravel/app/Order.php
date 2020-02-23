<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $primaryKey = 'id';
    protected $casts = [ 'id' => 'string' ];
    
    public function order_details()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function shipping_detail()
    {
        return $this->hasOne('App\ShippingDetail');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }


    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function billing_detail()
    {
        return $this->hasOne('App\BillingDetail');
    }
}
