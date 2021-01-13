<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('productAmount', '>', 0)->with('category')->get();
        return response()->json(['products' => $products , 'code' => 200]);
    }

    public function show(Product $product)
    {
        return response()->json(['product' => $product , 'code' => 200]);
    }


}
