<?php

//namespace App\Helpers;



if (! function_exists('m_asset')) {
    function m_asset($url)
    {
        if($rest = substr($url, 0) != '/'){
            $url = '/'.$url;
        }
        $host = request()->getHost();
        $root = request()->root();
        if($host == 'localhost'){
            return 'http://localhost/php/PizzaHut'.$url;
        }else{
            if(strpos($root,'m.pizzahutbd.com') !== false){
                return 'https://test.pizzahutbd.com'.$url;
            }else{
                return asset($url);
            }
        }
    }
}