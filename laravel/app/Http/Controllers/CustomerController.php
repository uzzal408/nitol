<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\ExportController;
use App\Exports\ExportCorporate;
use App\Exports\ExportReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{

    public function export(){
        return Excel::download(new ExportController(), 'customer-information.xlsx');
    }

    public function exportCorporate(){
       return Excel::download(new ExportCorporate(),'corporate-sales.xlsx');
    }

    public function exportReview(){
        return Excel::download(new ExportReview(),'customer-review.xlsx');
    }

}
