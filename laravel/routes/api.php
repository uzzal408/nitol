<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/filterProduct/{id}',       'ApiController@filterProduct');
Route::post('/product/filterProduct/{id}',      'ApiController@filterProduct');

Route::get('/store/locator/division/{id}',      'ApiController@filterDistrict');
Route::post('/store/locator/division/{id}',     'ApiController@filterDistrict');

Route::get('/store/locator/district/{id}',      'ApiController@filterThana');
Route::post('/store/locator/district/{id}',     'ApiController@filterThana');

Route::get('/store/locator/upazila/{id}',       'ApiController@filterStore');
Route::post('/store/locator/upazila/{id}',      'ApiController@filterStore');

Route::get('/product/productIdLimit/{id}',       'ApiController@productLimit');
Route::post('/product/productIdLimit/{id}',      'ApiController@productLimit');




