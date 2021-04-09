<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'quantity','image', 'category'
    ];

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
}
