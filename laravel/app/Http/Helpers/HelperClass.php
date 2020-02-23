<?php
/**
 * Created by PhpStorm.
 * User: sanaulla
 * Date: 12/27/18
 * Time: 10:32 AM
 */

namespace App\Helpers;


class HelperClass
{
    public static function timeOnly($time)
    {
        return date('h:i A', strtotime($time));
    }

}