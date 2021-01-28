<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //

    public function login() {
        return view('admin.login');
    }
    
    public function dashboard() 
    {
        $isAdmin = Auth::user()->isAdmin;
        return view('admin.dashboard')->with('isAdmin', $isAdmin);
        
    }

    public function registerProducts() 
    {
        return view('admin.registerProducts');
    }
}
