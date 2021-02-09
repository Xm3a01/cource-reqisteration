<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Admin;
use App\Course;
use App\Traits\HasImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    use HasImage;

    
    public function index()
    {
        
        $courses = Course::latest()->paginate(100);
        return view('admins.dashboard.courses.index' , ['courses' => $courses , 'title' => 'Courses']);
    }

 
    public function create()
    {
        $managers = Admin::where('is_supervisor' , 1)->get();
        return view('admins.dashboard.courses.create',['managers' => $managers , 'title' => 'Course Create']);
    }

   
    public function store(Request $request)
    {

        $this->validate($request , [
            'name' => 'required',
            'h_week' => 'required|regex:/^[0-9]+$/',
            'feeses' => 'required|',
            'description' => 'required'
        ] , [
            'feeses.regex' => 'The field Feeses must float and postive number',
            'h_week.regex' => 'The field H Week must be  postive number'
            ]);

        $course = Course::create($request->except('image'));

        if ($request->has('image')) {
            $this->storeImage($course , $request->image , 'courses');
        }

        \Session::flash('success' , 'Course Successfully created');
        return redirect()->route('courses.index');

    }

   
    public function edit(Course $course)
    {
        $managers = Admin::where('is_supervisor' , 1)->get();
        return view('admins.dashboard.courses.edit' , ['course' => $course , 'managers' => $managers , 'title' => 'Course edit']);
    }

    
    public function update(Request $request, Course $course)
    {
        $course->update($request->except('image'));

        if ($request->has('image')) {
            $this->deleteImage($course , $course->image , 'courses');
            $this->storeImage($course , $request->image , 'courses');
        }

        \Session::flash('success' , 'Course Successfully updated');
        return redirect()->route('courses.index');

    }

   
    public function destroy(Course $course)
    {
        $this->deleteImage($course , $course->image , 'coursese');
        $course->delete();

        \Session::flash('success' , 'Course Successfully deleted');
        return redirect()->route('courses.index');
    }
}
