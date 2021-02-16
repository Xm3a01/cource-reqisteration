<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\User;
use App\Course;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
   
    public function index()
    {
       $students = User::with('courses')->paginate(100);
       return view('admins.dashboard.students.index' , ['students' => $students]);
    }

   
    public function create()
    {
       return view('admins.dashboard.students.create');
        
    }

   
    public function store(StudentRequest $request)
    {

        //student Store
        $request['password'] = \Hash::make($request->password);
        $user = User::create($request->all());

        \Session::flash('success' , 'Student Successfully Create');
        return redirect()->route('students.index');
    }

  
    public function edit(User $student)
    {
        $courses = Course::all();
       return view('admins.dashboard.students.edit' , ['student' => $student , 'courses' => $courses]);
    }

    public function update(Request $request, User $student)
    {
        if($request->has('password')){
            $request['password'] = \Hash::make($request->password);
        }

        $student->update($request->all());
        $student->courses()->sync($request->courses);

        \Session::flash('success' , 'Student Successfully updated');
        return redirect()->route('students.index');
    }

  
    public function destroy($id)
    {
        //
    }

    public function assignCourse(Request $request)
    {

    }
}
