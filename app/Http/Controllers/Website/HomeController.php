<?php

namespace App\Http\Controllers\Website;

use App\Ads;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->take(3)->get();
        $events = Ads::latest()->take(4)->get();
        $course = Course::latest()->first();

        return view('website.home',[
            'courses' => $courses,
            'events' => $events,
            'course' => $course
        ]);
    }
}
