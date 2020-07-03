<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ClearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cacheClear()
    {
        return Artisan::call('cache:clear');
    }

    public function configClear(){
        return Artisan::call('config:clear');
    }
}
