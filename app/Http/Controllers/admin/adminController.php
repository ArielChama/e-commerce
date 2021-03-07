<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\products;

class adminController extends Controller
{
    //
    public function __construct() 
    {
        $this->middleware(['auth', 'checkAdmin']);
    }
    
    public function dashboard() 
    {
        $users = user::all();
        $products = products::All();
        return view('admin.dashboard', ['users' => $users, 'products' => $products]);
        
    }

    
}
