<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerLogin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email','dateOfBirth','nidNumber','present_aadress','image','provider','provider_id', 'password',];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function orderStatus()
    {
        return $this->hasMany('App\Order');
    }
}
