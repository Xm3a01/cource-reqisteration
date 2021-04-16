<?php

use App\Course;
// use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
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
  Route::resource('trainers','Admin\Dashboard\CCST\TrainerController');
  Route::resource('galleries','Admin\Dashboard\CCST\GalleryController');
  Route::resource('settings', 'Admin\Dashboard\CCST\SettingController')->except(['show' , 'destory']);
  Route::get('/' , 'Admin\IndexController@index')->name('admins.dashboard');
  
  Route::group(['prefix' => '/' ,  'middleware' => 'superadmin'] , function(){
    Route::resource('students','Admin\Dashboard\CCST\StudentController');
    Route::resource('managers', 'Admin\Dashboard\CCST\ManagerController');
    Route::resource('/trainers', 'Admin\Dashboard\CCST\TrainerController');
    Route::get('super-admin/{admin}', 'Admin\Dashboard\AdminController@superAdmin')->name('super.admin');
  });

  Route::get('profile','Admin\IndexController@profile')->name('profile');
  Route::put('profile/{admin}','Admin\IndexController@editProfile')->name('profile.update');
});



Auth::routes();

Route::get('/', 'Website\HomeController@index')->name('index');
Route::get('/abouts', 'Website\AboutController@index')->name('abouts.index');
Route::get('/trainers', 'Website\TraineeController@index')->name('web.trainers');
Route::get('/courses', 'Website\CourseController@index')->name('web.courses');
Route::get('/events', 'Website\EventController@index')->name('web.events');
Route::get('/galleries', 'Website\GalleryController@index')->name('web.galleries');
Route::get('/contact', 'Website\ContactController@index')->name('contact.index');
Route::post('/contact/send', 'Website\ContactController@store')->name('contact.send');
Route::post('/register/store', 'Website\CourseController@registeration')->name('register.store');
Route::get('/register/{course}', 'Website\CourseController@showRegister')->name('register.show');
Route::get('/course/{course}/show', 'Website\CourseController@show')->name('course.show');
Route::get('/payment', 'Website\CourseController@showRegister')->name('payment.show');

Route::get('test' , function(){
  $course = Course::first();
  return view('website.registration' , ['course' => $course]);
});

// Route::post('get-valid' , function(Request $r){

//   // return $r;
//   $validator =  Validator::make($r->all(),[
//       'name' => 'required|min:10',
//       'username' => 'required',
//       'password' => 'required|confirmed|min:8',
//       'phone' => 'required|numeric|regex:/(0)[0-9]{9}/',
//       'address' => 'required',
//       'gender' => 'required',
//       'birthday' => 'required|before:today',
//       'level' => 'required',
//       'job_title' => 'required',
//       'coures_time' => 'required',
//       'whenWasthat' => 'required',
//       'whatsapp' => 'regex:/^0[0-9]{9}$/',
//       'email' => 'required|email',
//   ],
//     [
//       'phone.regex' => 'The :attribute must start with 0 and must be 10 number',
//       'whatsapp.regex' => 'The :attribute number must start with 0 and must be 10 number'
//   ]);

//     if($validator->fails()){
//         // return response()->json([
//         //     "error" => 'validation_error',
//         //     "message" => $validator->errors(),
//         // ], 422);

//         return response()->json([
//               "code" => 422,
//               "message" => $validator->errors(),
//           ]);
//     }

//     // return redirect()->route('index');
// });

// get-valid