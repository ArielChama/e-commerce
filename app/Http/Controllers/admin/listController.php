<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listController extends Controller
{
    //
    public function Products()
    {
        return view('admin.listProducts');
    }

    public function users()
    {
        return view('admin.listUsers');
    }
}
