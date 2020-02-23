<?php
namespace App\Exports;

use App\ProductReview;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class ExportReview implements FromCollection{
    public function collection()
    {
        // TODO: Implement collection() method.

    return DB::table('product_reviews')
        ->join('products','product_reviews.product_id','=','products.id')
        ->select('product_reviews.id as id','products.title as product_title','products.price as price','product_reviews.customer_name as customer_name',
            'product_reviews.product_review as review','product_reviews.product_comment')
        ->get();

    }

}