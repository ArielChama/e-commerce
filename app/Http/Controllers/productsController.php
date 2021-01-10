<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /* 
        Controller responsible for triggering all pages related to products
    */

    public function products() 
    {
        $routeName = Route::currentRouteName();

        return view('products.list')->with('route', $routeName);
    }

    public function cart() 
    {
        return view('products.cart');
    }

    public function view($id) 
    {
        return view('products.view')->with('id', $id);
    }

    public function upload(Request $request) 
    {
        return view('products.upload');
    }
}
