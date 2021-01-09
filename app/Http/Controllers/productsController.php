<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    /* 
        Controller responsible for triggering all pages related to products
    */

    public function products() {
        return view('products.list');
    }

    public function cart() {
        return view('products.cart');
    }

    public function view($id) {
        return view('products.view')->withId($id);
    }
}
