<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@getHome');
Route::get('detail/{id}.html','HomeController@getDetail');
Route::get('brand/{id}','HomeController@getBrand');
Route::get('category/{id}','HomeController@getCategory');
Route::get('search','HomeController@getSearch');
Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}','CartController@addToCart');
    Route::get('show','CartController@getShowCart');
});