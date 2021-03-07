<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\products;

class productsController extends Controller
{
    /* 
        Controller responsible for triggering all pages related to products
    */

    public function products() 
    {
        $route = Route::currentRouteName();

        $products = products::All();

        return view('products.list', ['route' => $route, 'products' => $products]);
    }

    public function cart() 
    {
        return view('products.cart');
    }

    public function view($id) 
    {
        $product = products::find($id);
        return view('products.view', ['id' => $id, 'product' => $product]);
    }

    public function upload(Request $request) 
    {
        return view('products.upload');
    }
}
