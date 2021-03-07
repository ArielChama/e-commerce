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

Route::match(['get', 'post'], '/admin', 'admin\loginController@login')->name('admin.login');

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/dashboard', 'adminController@dashboard')->name('admin.dashboard');
    Route::get('/products/register', 'registerProductsController@register')->name('admin.products.register');
    Route::post('/products/registered', 'registerProductsController@registered')->name('admin.products.registered');
    Route::get('/products/list', 'listController@Products')->name('admin.products.list');
});
