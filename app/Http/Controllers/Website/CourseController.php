<?php

namespace App\Http\Controllers\Website;

use App\User;
use App\Course;
use Carbon\Carbon;
use App\Hellper\Payment;
use App\Hellper\Validation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRegRequest;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('trainer')->paginate(100);
        return view('website.courses' , ['courses' => $courses]);
    }

    public function registeration(Request $request)
    {

        // return $request->all();
       
          $validator = Validation::make($request->all());

          if($validator->fails()){
            return response()->json([
                  "code" => 422,
                  "message" => $validator->errors(),
          ]);
        }

        // // \DB::transaction(function () use ($request){
            
            $course = Course::findOrFail($request->course_id);
    
            $request['unHash_password'] = $request->password;
            $request['password'] = \Hash::make($request->password);
            $user = User::create($request->all());
            $user->courses()->sync($request->course_id);
    
            return response()->json(['payment_url' => Payment::payed($course)]);
        // });
    }
    public function showRegister(Course $course)
    {
        // return $course;
        return view('website.registration' , ['course' => $course]);
    }

    public function show(Course $course)
    {
        $course->load('trainer');
        return view('website.course-detials',['course' => $course]);
    }
}
