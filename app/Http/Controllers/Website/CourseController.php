<?php

namespace App\Http\Controllers\Website;

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
        $courses = Course::paginate(100);
        return view('website.courses' , ['courses' => $courses]);
    }

    public function registration(Request $request)
    {
        $this->validate($request , [

        ]);
    }
    public function showRegister()
    {
        
    }

    public function show(Course $course)
    {
        return view('website.course-detials',['course' => $course]);
    }
}
