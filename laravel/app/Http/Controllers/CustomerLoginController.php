<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Auth;

class CustomerLoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct(){
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm()
    {
        Session::put('url.intended',URL::previous());
        return view('front.customerLogin.login-form');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('customer')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get('remember'))) {
//            return redirect()->intended(route('home'));
            return Redirect::to(Session::get('url.intended'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

}
