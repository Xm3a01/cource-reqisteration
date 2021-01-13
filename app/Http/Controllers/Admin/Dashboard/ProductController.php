<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Admin;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
   
    public function index()
    {
          
        if(Auth::guard('admin')->user()->is_supervisor)
          $products =  Product::where('admin_id' , Auth::guard('admin')->user()->id)->get();
        else 
          $products = Product::all();

        return view('admins.dashboard.products.index' , ['products' => $products]);
    }

    
    public function create()
    {
        $categories = Category::all();
        $admins = Admin::where('is_supervisor' , 1)->get();
        return view('admins.dashboard.products.create' , [
            'categories' => $categories,
            'admins' => $admins
            ]);
    }

   
    public function store(Request $request)
    {
        $data = $request->all();
        // if(!$request->admin_id) {
        //   $data['admin_id'] = Auth::guard('admin')->user()->id;
        // }
        // return $request->image;

        $this->validate($request , [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'availableSize' => 'required',
            'disCount' => 'required',
            'productAmount' => 'required',
        ]);
        $data['fiexdAmount']  = $data['productAmount'];

         $product = Product::create($data);
            
        if($request->hasFile('image')) {
            foreach ($request->image as $item) {        
                $product->addMedia($item)->preservingOriginal()->toMediaCollection('products');
            }
        }
        \Session::flash('success' , 'تم حفظ المنتج بنجاح');
        return redirect()->route('products.index');
    }

   
    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $admins = Admin::where('is_supervisor' , 1)->get();

        return view('admins.dashboard.products.edit' , [
            'product' => $product,
            'categories' =>  $categories,
            'admins' => $admins
            ]);
    }

   
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $product->update($data);
        if ($request->hasFile('image')) {
            $product->clearMediaCollection('products');
            foreach ($request->image as $item) {  
              $product->addMedia($item)->preservingOriginal()->toMediaCollection('products');
            }
        }

        \Session::flash('success' , 'تم تعديل المنتج بنجاح');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->clearMediaCollection('products');
        $product->delete();

        \Session::flash('success' , 'تم حفظ المنتج بنجاح');
        return redirect()->route('products.index');
    }
}
