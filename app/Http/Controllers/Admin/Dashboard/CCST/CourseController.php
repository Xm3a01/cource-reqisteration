<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use Auth;
use App\Admin;
use App\Course;
use App\Trainer;
use App\Traits\HasImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{

    use HasImage;

    
    public function index()
    {
        $titles = [
            'Name',
            'H/week',
            'Monthes',
            'feeses',
            'seats',
            'description',
        ];


        if(Auth::guard('admin')->user()->is_supervisor){
            $courses = Auth::guard('admin')->user()->courses()->paginate(100);
        } else {

            $courses = Course::latest()->paginate(100);
        }
        // return $courses;
        return view('admins.dashboard.courses.index' , ['courses' => $courses , 'title' => 'Courses' , 'titles' => $titles]);
    }

 
    public function create()
    {
        $managers = Admin::where('is_supervisor' , 1)->get();
        $trainers = Trainer::all();
        return view('admins.dashboard.courses.create',['managers' => $managers , 'title' => 'Course Create' , 'trainers' => $trainers]);
    }

   
    public function store(CourseRequest $request)
    {

        $course = Course::create($request->except('image'));

        if ($request->has('image')) {
            $ex = $request->image->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
        //    dd($request->image);
            $course->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('courses');
        }

        \Session::flash('success' , 'Course Successfully created');
        return redirect()->route('courses.index');

    }

   
    public function edit(Course $course)
    {
        $trainers = Trainer::all();
        $managers = Admin::where('is_supervisor' , 1)->get();
        return view('admins.dashboard.courses.edit' , ['course' => $course , 'managers' => $managers , 'title' => 'Course edit' , 'trainers' => $trainers]);
    }

    
    public function update(Request $request, Course $course)
    {
        $course->update($request->except('image'));

        if ($request->has('image')) {
            $course->clearMediaCollection('courses');
            $ex = $request->image->getClientOriginalExtension('courses');
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
        //    dd($request->image);
            $course->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('courses');
        }

        \Session::flash('success' , 'Course Successfully updated');
        return redirect()->route('courses.index');

    }

   
    public function destroy(Course $course)
    {
        $course->clearMediaCollection('courses');
        $course->delete();

        \Session::flash('success' , 'Course Successfully deleted');
        return redirect()->route('courses.index');
    }
}
