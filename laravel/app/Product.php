<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
        return $this->morphedByMany('App\Attachment', 'attachment','attachments','image_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','products_categories','product_id','category_id');
    }

    public function addons()
    {
        return $this->morphedByMany('App\Addon', 'product_element');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function ingredients()
    {
        return $this->morphedByMany('App\Ingredient', 'product_element');
    }

    public function order_details()
    {
        return $this->hasOne('App\OrderDetail','product_id','id');

    }

    public function product_size(){
        return $this->hasMany('App\ProductSize');
    }

    public function productReviews(){
        return $this->hasMany('App\ProductReview');
    }
}
