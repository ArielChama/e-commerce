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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cart', 'productsController@cart')->name('cart');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'productsController@products')->name('products.list');
    Route::get('/{id}', 'productsController@view')->name('products.view');
});

Route::group(['prefix' => 'admin', 'middleware' => ['checkAdmin', 'auth'], 'namespace' => 'admin'], function () {
    Route::get('/', 'adminController@admin')->name('admin.dashboard');
    Route::get('/register/products', 'adminController@registerProducts');
    Route::get('/list/products', 'listController@Products');
    Route::get('/list/users', 'listController@users');
});
