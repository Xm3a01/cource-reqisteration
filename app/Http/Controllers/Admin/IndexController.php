<?php

namespace App\Http\Controllers\Admin;

use App\Ads;
use App\User;
use App\Admin;
use App\Course;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {

        return view('admins.dashboard.index',[
            'students' => User::all()->count(),
            'cources' => Course::all()->count(),
            'events' => Ads::all()->count(),
            'managers' => Admin::where('is_supervisor' , 1)->count(),
        ]);
    }
}
