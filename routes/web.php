<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * , 'middleware' => 'auth:admin'
 * group 2 ['middleware' => 'is_admin']
 */


Route::group(['prefix' => '/dashboard'] , function(){

  Route::resource('courses', 'Admin\Dashboard\CCST\CourseController');
  Route::resource('events','Admin\Dashboard\CCST\EventController');
  Route::get('/' , 'Admin\IndexController@index')->name('admins.dashboard');
  
  // Route::group('/' , function(){
    Route::resource('students','Admin\Dashboard\CCST\StudentController');
    Route::resource('managers', 'Admin\Dashboard\CCST\ManagerController');
    Route::get('super-admin/{admin}', 'Admin\Dashboard\AdminController@superAdmin')->name('super.admin');
  // });
});


  require __DIR__.'/admin.php';


// api for spa
Route::get('website-products' , 'Website\ProductController@index')->name('website.products');
Route::get('last-products','Website\ProductController@lastProduct')->name('last.products');
Route::get('website-categories','Website\ProductController@category')->name('website.categories');
Route::get('last-categories','Website\ProductController@lastCategory')->name('last.categories');
Route::get('authuser','Website\ProductController@authuser')->name('auth.user');

//show website pages
Route::get('/' , 'Website\IndexController@index')->name('index');
Route::get('categories','Website\ProductController@showCategoryPage')->name('show.categories');
Route::get('products','Website\ProductController@showProductPage')->name('show.categories');
Route::get('products/{product}','Website\ProductController@showProduct')->name('show.product');
Route::resource('contacts','Website\ContactController');

// Cart
Route::get('cart/{id}' , 'CartController@addItem')->name('cart');
Route::get('cart-update' , 'CartController@updateItem')->name('cart.update');
Route::get('cart-delete' , 'CartController@delete')->name('cart.delete');
Route::get('cart-delete-all' , 'CartController@deleteAll')->name('cart.delete.all');
Route::get('get-cartItems' , 'CartController@cartItems')->name('cart.items');
Route::get('get-cartItem/{id}' , 'CartController@getItem')->name('cart.item');
Route::get('show-cartItem/{id}' , 'CartController@showCart')->name('show.cartItem');
Route::get('save-order' , 'CartController@saveOrder')->name('save.order');
Route::get('more-sels','Website\ProductController@moreSeled');

//
Route::get('test',function () {
  \Session::flash('error', "hello word");
  return back();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sinOut', function () {
  Auth::guard('web')->logout();
  return redirect()->route('login');
});


Route::get('cart', function () {
  return view('cart');
});