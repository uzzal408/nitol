<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SocialLogin extends Authenticatable
{
    protected $table = 'socail_logins';
    protected $fillable = ['name','email','image','provider','provider_id','password'];

}
