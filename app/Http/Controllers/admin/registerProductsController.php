<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\products;

class registerProductsController extends Controller
{
    //
    public function register() 
    {
        return view('admin.registerProducts');
    }

    public function registered(Request $request) 
    {
        function uploadImage($request)
        {
            if ($request->file('image')->isValid() && $request->hasFile('image')) {
                $name = uniqid(date('HisYmd'));
                $extension = $request->image->extension();
                $nameImage = "{$name}.{$extension}";
                $upload = $request->image->storeAs('products', $nameImage);

                return $nameImage;
            }
        }

        $products = new products();

        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->category = $request->category;
        $products->image = uploadImage($request);
        $products->category = $request->category;
        $products->save();

        return redirect()->route('admin.dashboard');
    }

}
