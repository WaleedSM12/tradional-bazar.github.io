<?php

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

Route::get('/', 'Website\HomeController@index')->name('home');
Route::get('/shop', 'Website\ShopController@index')->name('shop');
Route::get('/product/{id}', 'Website\ShopController@show')->name('product');
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/checkout', 'Website\HomeController@cart');
