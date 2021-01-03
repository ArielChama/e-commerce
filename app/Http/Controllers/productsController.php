<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    //
    public function products() {
        return view('products.list-products');
    }
}
