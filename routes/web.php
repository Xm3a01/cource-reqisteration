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

require __DIR__.'/admin.php';

Route::group(['prefix' => '/dashboard' , 'middleware' => 'auth:admin'] , function(){

  Route::resource('courses', 'Admin\Dashboard\CCST\CourseController');
  Route::resource('events','Admin\Dashboard\CCST\EventController');
  Route::resource('galleries','Admin\Dashboard\CCST\GalleryController');
  Route::get('/' , 'Admin\IndexController@index')->name('admins.dashboard');
  
  Route::group(['prefix' => '/' ,  'middleware' => 'superadmin'] , function(){
    Route::resource('students','Admin\Dashboard\CCST\StudentController');
    Route::resource('managers', 'Admin\Dashboard\CCST\ManagerController');
    Route::get('super-admin/{admin}', 'Admin\Dashboard\AdminController@superAdmin')->name('super.admin');
  });
});



Auth::routes();

Route::get('/', 'Website\HomeController@index')->name('index');
Route::get('/abouts', 'Website\AboutController@index')->name('abouts.index');
Route::get('/trainers', 'Website\TraineeController@index')->name('web.trainers');
Route::get('/courses', 'Website\CourseController@index')->name('web.courses');
Route::get('/events', 'Website\EventController@index')->name('web.events');
Route::get('/galleries', 'Website\GalleryController@index')->name('web.galleries');
Route::get('/contact', 'Website\ContactController@index')->name('contact.index');
Route::post('/register', 'Website\CourseController@registeration')->name('register.store');
Route::get('/register', 'Website\CourseController@showRegister')->name('register.show');
Route::get('/course/{course}/show', 'Website\CourseController@show')->name('course.show');
Route::get('/payment', 'Website\CourseController@showRegister')->name('register.show');