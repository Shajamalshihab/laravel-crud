<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function store(Request $request)
    {
        Product::newProduct($request);
        return redirect()->back()->with('message','Product info save successfully.');
    }
}
