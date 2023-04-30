<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$image,$directory,$imageName;

    public static function getImageUrl($rquest)
    {
        self::$image = $rquest->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "product-images/";
        self::$image->move(self::$directory,self::$imageName);
        
        return self::$directory.self::$imageName;
    }
    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->name=$request->name;
        self::$product->description=$request->description;
        self::$product->price=$request->price;
        self::$product->image=self::getImageUrl($request);

        self::$product->save();
    }
}
