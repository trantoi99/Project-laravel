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
Route::get('checkout','CartController@getCheckOut');
Route::get('/add-to-cart/{id}', 'CartController@add')->name('cart.add');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/destroy/{id}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update', 'CartController@update')->name('cart.update');
Route::post('/cart/save', 'CartController@save_cart')->name('cart.save_cart');


