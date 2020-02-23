<?php
namespace App\Exports;
use App\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
class ExportController implements FromCollection{
    public function collection()
    {
        return Customer::all();
    }

}