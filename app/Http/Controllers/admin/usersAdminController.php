<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class usersAdminController extends Controller
{
    //
    public function __construct() 
    {
        $this->middleware(['auth', 'checkAdmin']);
    }
    
    public function delete($id) 
    {
        user::destroy($id);

        return redirect()->route('admin.dashboard');
    }
}
