<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = products::All();
        return view('home', ['products' => $products]);
    }
}
