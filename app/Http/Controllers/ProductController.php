<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    
}
