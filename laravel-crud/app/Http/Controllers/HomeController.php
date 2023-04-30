<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public static $products;
    public function index()
    {
        self::$products = Product::all();
        return view('home.index',['products'=>self::$products]);
    }
}
