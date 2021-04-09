<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\products;

class productsAdminController extends Controller
{
    //
    public function __construct() 
    {
        $this->middleware(['auth', 'checkAdmin']);
    }

    public function register() 
    {
        return view('admin.registerProducts');
    }

    public function registered(Request $request) 
    {
        $products = new products();

        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->category = $request->category;
        $products->image = $products->uploadImage($request);
        $products->category = $request->category;
        $products->save();

        return redirect()->route('admin.dashboard');
    }

    public function edit($id) 
    {
        $products = products::find($id);
        return view('admin.editProducts', ['products' => $products]);
    }

    public function update(Request $request, $id)
    {
        $products = products::find($id);
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->category = $request->category;
        if ($request->file('image') == "") {
            $products->image = $products->image;
        } else {
            $products->image = $products->uploadImage($request);
        }

        $products->save();

        return redirect()->route('admin.dashboard');
    }

    public function delete($id) 
    {
        products::destroy($id);

        return redirect()->route('admin.dashboard');
    }
}
