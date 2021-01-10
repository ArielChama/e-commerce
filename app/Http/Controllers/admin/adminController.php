<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function admin() 
    {
        return view('admin.dashboard');
    }
}
