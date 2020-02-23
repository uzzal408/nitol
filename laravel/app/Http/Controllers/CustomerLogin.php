<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerLogin extends Model
{
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function orderStatus()
    {
        return $this->hasMany('App\Order');
    }
}
