<?php

namespace App\Http\Controllers\Website;

use App\User;
use App\Course;
use Carbon\Carbon;
use App\Hellper\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRegRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('trainer')->paginate(100);
        return view('website.courses' , ['courses' => $courses]);
    }

    public function registeration(Request $request)
    {

        $course = Course::findOrFail($request->course_id);

        // $Payment = Payment::$SERVICE_ID.'|'.Payment::$APLICATION_ID.'|'.Payment::$PAYEE_ID.'|'.Payment::appIntegraty();
        // $hash = \Hash::make($Payment);
        // $hash2=hash('sha256',$Payment);
        // return $Payment.'  This hash => '.$hash.'  This hash2 => '.$hash2. Carbon::now();
        // unHash_password
        // $request['unHash_password'] = $request->password;
        // $request['password'] = \Hash::make($request->password);
        // $user = User::create($request->all());
        return Payment::payed($course);
        // student Store whenWasthat
        //
        


        $user->courses()->sync($request->course_id);
        \Session::flash('success' , 'Student Successfully Create');
        return back();
    }
    public function showRegister(Course $course)
    {
        // return $course;
        return view('website.reg' , ['course' => $course]);
    }

    public function show(Course $course)
    {
        $course->load('trainer');
        return view('website.course-detials',['course' => $course]);
    }
}
