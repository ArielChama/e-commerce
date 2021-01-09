<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function login() {
        return view('admin.login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
