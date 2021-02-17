<?php

namespace App\Http\Controllers\Website;

use App\User;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('trainer')->paginate(100);
        return view('website.courses' , ['courses' => $courses]);
    }

    public function registeration(Request $request)
    {
        //student Store whenWasthat
        $request['password'] = \Hash::make($request->password);
        $request['whatsapp'] = $request->phone;
        $user = User::create($request->all());

        $user->courses()->sync($request->course_id);
        \Session::flash('success' , 'Student Successfully Create');
        return back();
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
