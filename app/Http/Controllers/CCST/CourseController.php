<?php

namespace App\Http\Controllers\CCST;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
 
    public function index()
    {
        // $courses = Course::paginate(100)->latset();
        return view('admins.dashboard.courses.index' , [
            // 'courses' => $courses
            ]);
    }

 
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
