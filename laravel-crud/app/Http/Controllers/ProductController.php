<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public static $products,$product;
    public function index()
    {
        return view('product.index');
    }
    public function store(Request $request)
    {
        Product::newProduct($request);
        return redirect()->back()->with('message','Product info save successfully.');
    }
    public function manage()
    {   
        self::$products = Product::all();
        return view('product.manage',['products'=>self::$products]);
    }
    public function edit($id)
    {
        self::$product = Product::find($id);
        return view('product.edit',['product'=>self::$product]);
    }
}
