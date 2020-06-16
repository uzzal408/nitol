<?php
/**
 * Created by PhpStorm.
 * User: sanaulla
 * Date: 12/27/18
 * Time: 10:32 AM
 */

namespace App\Helpers;


use App\Category;

class HelperClass
{
    public static function timeOnly($time)
    {
        return date('h:i A', strtotime($time));
    }

    public static function categoryIdByName($name){
       $category = Category::where('name',$name)->select('id')->first();
       if($category!=null){
          $id = $category->id;
       }else{
           $id = 0;
       }

       return $id;
    }

}