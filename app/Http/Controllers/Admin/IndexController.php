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

    public function profile()
    {
        $admin =  \Auth::guard('admin')->user();
        return view('admins.profile.edit',['admin' => $admin]);
    }

    public function editProfile(Request $request , Admin $admin)
    {
        if($request->has('password') && $request->password !="") {
            $admin->password = \Hash::make($request->password);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        if($request->has('avatar')){
            $admin->clearMediaCollection('admins');
            $ex = $request->avatar->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $admin->addMedia($request->avatar)->usingFileName($fileName)->toMediaCollection('admins');
        }

        \Session::flash('success' , 'Profile update successfully');
        return back();
    }
}
