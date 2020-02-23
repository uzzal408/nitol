<?php
namespace App\Exports;

use App\CorporateSale;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCorporate implements FromCollection{
    public function collection()
    {
        return CorporateSale::all();
    }
}