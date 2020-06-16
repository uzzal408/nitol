<?php

namespace App\Http\Controllers;
use App\CustomerLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Socialite;
use Auth;

class SocialLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:customer')->except('logout');
    }
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->user();
        $users       =   CustomerLogin::where(['email' => $userSocial->getEmail()])->first();
        if($users){
           Auth::guard('customer')->login($users);
            return Redirect::to(Session::get('url.intended'));
        }else{
            $user = CustomerLogin::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
            $users =   CustomerLogin::where(['email' => $userSocial->getEmail()])->first();
            Auth::guard('customer')->login($users);
            return Redirect::to(Session::get('url.intended'));
        }
    }
}
