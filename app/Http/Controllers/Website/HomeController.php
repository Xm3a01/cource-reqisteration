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
        $events = Ads::latest()->take(5)->get();
        // dd($courses);
        $lastCourse = Course::all()->last();

        return view('website.home',[
            'courses' => $courses,
            'events' => $events,
            'lastCourse' => $lastCourse
        ]);
    }
}
