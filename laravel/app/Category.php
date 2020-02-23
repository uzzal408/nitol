<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product','products_categories','category_id','product_id')->withPivot('product_id');
    }

    public function children()
    {
        return $this->hasMany('app\Category','parent_id');
    }

    public function allChildren(){
        //        $category = Category::find(2);
        $category_ids = [];
        if($this->children->count() > 0){
            foreach ($this->children as $sub_category){
                $category_ids[] = $sub_category->id;
                if($sub_category->children->count() > 0){
                    foreach ($sub_category->children as $sub_category){
                        $category_ids[] = $sub_category->id;
                    }
                }
            }
        }
        sort($category_ids) ;
        return $category_ids;
    }

    public function getCachedCommentsCountAttribute()
    {
        return Cache::remember($this->cacheKey() . ':all_categories', 15, function () {
            return $this->allCategory();
        });
    }

    public function cacheKey()
    {
        return sprintf(
            "%s/%s-%s",
            $this->getTable(),
            $this->getKey(),
            $this->updated_at->timestamp
        );
    }

    public static function allCategory(){
        $categories = DB::table('categories as c1')
            ->leftJoin('categories as c2','c2.parent_id','=','c1.id')
            ->leftJoin('categories as c3','c3.parent_id','=','c2.id')
            ->leftJoin('categories as c4','c4.parent_id','=','c3.id')
            ->select('c1.image as image', 'c1.id as c1_id','c1.name as c1_name','c2.id as c2_id','c2.name as c2_name','c3.id as c3_id','c3.name as c3_name','c4.id  as c4_id','c4.name as c4_name')
            ->where('c1.parent_id','=',0)
            ->where('c1.publication_status','=',1)
            ->orderBy('c1_id')->orderBy('c2_id')
            ->get();
        //        return $categories;
        $all_categories = [];
        $category_c1_id = '';
        $category_c2_id = '';
        $category_c3_id = '';
        $category_c4_id = '';
        $c1_id = -1;
        $c2_id = -1;
        $c3_id = -1;
        $c4_id = -1;
        foreach ($categories as $k=>$category){
            if($category->c1_id != $category_c1_id){
                $c1_id = $c1_id +1;
                $all_categories[$c1_id]['id'] = $category->c1_id;
                $all_categories[$c1_id]['name'] = $category->c1_name;
                $all_categories[$c1_id]['image'] = $category->image;
                $c2_id = -1;
            }
            if($category->c2_id != $category_c2_id && $category->c2_id <> NULL){
                $c2_id = $c2_id +1;
                $all_categories[$c1_id]['children'][$c2_id]['id'] = $category->c2_id;
                $all_categories[$c1_id]['children'][$c2_id]['name'] = $category->c2_name;
                $c3_id = -1;
            }
            if($category->c3_id != $category_c3_id && $category->c3_id <> NULL){
                $c3_id = $c3_id +1;
                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['id'] = $category->c3_id;
                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['name'] = $category->c3_name;
                $c4_id = -1;
            }
            if($category->c4_id != $category_c4_id && $category->c3_id <> NULL){
                $c4_id = $c4_id +1;
                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['children'][$c4_id]['id'] = $category->c4_id;
                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['children'][$c4_id]['name'] = $category->c4_name;
            }
            $category_c1_id = $category->c1_id;
            $category_c2_id = $category->c2_id;
            $category_c3_id = $category->c3_id;
            $category_c4_id = $category->c4_id;
        }
        return $all_categories;
    }
}
