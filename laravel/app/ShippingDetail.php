<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingDetail extends Model
{
    protected $table = 'shipping_details';
    protected $fillable = ['customer_id','order_id','first_name','last_name','email','phone','address','country','zip_code','town'];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }


    public function delivery(){
        return $this->hasOne('App\Delivery');
    }

}
