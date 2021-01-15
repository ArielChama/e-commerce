<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //

    public function admin() 
    {
        $isAdmin = Auth::user()->isAdmin;
        return view('admin.dashboard')->with('isAdmin', $isAdmin);
        
    }
}
