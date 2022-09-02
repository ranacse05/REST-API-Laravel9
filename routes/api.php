<?php

use App\Http\Controllers\API\PassportAuthController;
use App\Http\Controllers\API\ProductController;
 
Route::post('register', 'PassportAuthController@register');
Route::post('login', 'PassportAuthController@login');

Route::get('test', 'PassportAuthController@test');
  
Route::middleware('auth:api')->group(function () {
    Route::get('get-user', 'PassportAuthController@userInfo');
 
 Route::resource('products', 'ProductController');
 
});