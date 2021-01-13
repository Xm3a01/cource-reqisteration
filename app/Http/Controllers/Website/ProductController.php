<?php

namespace App\Http\Controllers\Website;

use App\Order;
use App\Mapping;
use App\Product;
use App\Category;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Traits\Mapping as Canvert;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;

class ProductController extends Controller
{
    use Canvert;
    public function index()
    {
        $products = Product::where('productAmount', '>', 0)->with('category')->latest('created_at')->get();
        $this->convert_to_map($products);
        return response()->json(['products' => $products]); 
    }

    public function lastProduct()
    {
        $products = Product::where('productAmount', '>', 0)->latest('created_at')->limit(8)->get();
        $this->convert_to_map($products);
        return response()->json(['products' => $products]);
    }

    public function category()
    {
        $categories = Category::latest('created_at')->get();
        $this->convert_to_map($categories);
        return response()->json(['categories' => $categories]);     
    }

    public function lastCategory()
    {
        $categories = Category::latest('created_at')->limit(3)->get();
        $this->convert_to_map($categories);
        return response()->json(['categories' => $categories]);     
    }


    public function showProductPage()
    {
        return view('website.products');
    }

    public function showCategoryPage()
    {
        return view('website.categories');
    }

    public function showContactPage()
    {
        return view('website.categories');
    }

    public function authuser()
    {
        if(\Auth::check()){
        $user = \Auth::user();
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar
        ];
        return response()->json(['user' =>$data ]);
       }
       return response()->json(['user' =>false ]); 
    }

    public function moreSeled()
    {
        $orders = Order::orderBy('quantity' , 'desc')->take(8)->with('product')->get();
        $this->convert_relation($orders);
       
        return $orders;
    }

    public function showProduct(Product $product)
    {
        $images = [];

        if(\Auth::check()) {
            $userId = Auth::user()->id;
           $item = \Cart::session($userId)->get($product->id);
         } else {
            $item = \Cart::get($product->id);
         }
        
        foreach ($product->getMedia('products') as $key=>$item) {
            $images[$key] = $item->getUrl(); 
        }
        $product['images'] = $images;
        return view('website.product-show' , ['product' => $product , 'item' => $item]);
    }

}
