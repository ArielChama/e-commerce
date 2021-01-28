<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //
    public function __construct() {
        $this->middleware(['auth', 'checkAdmin']);
    }
    
    public function dashboard() 
    {
        return view('admin.dashboard');
        
    }

    public function registerProducts() 
    {
        return view('admin.registerProducts');
    }
}
