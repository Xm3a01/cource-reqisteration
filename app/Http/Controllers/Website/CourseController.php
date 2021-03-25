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

        $request['unHash_password'] = $request->password;
        $request['password'] = \Hash::make($request->password);
        $user = User::create($request->all());
        $user->courses()->sync($request->course_id);

        return Payment::payed($course);
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
