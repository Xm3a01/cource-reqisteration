<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Admin;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::where('is_supervisor' , 1)->get();
        return view('admins.dashboard.managers.index' , ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.dashboard.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request , [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);


        $data['password']  = Hash::make($request->password);

        $admin = Admin::create($data);

        if ($request->has('avatar')) {
            // $admin->clearMediaCollection('avatars');
            $admin->addMedia($request->avatar)->preservingOriginal()->toMediaCollection('avatars');
        }

        \Session::flash('success' , 'تم حفظ المشرف بنجاح');
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admins.dashboard.admins.edit' , ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $admin->update($request->except(['avatar' , 'password']));

        if($request->has('password') && $request->password != ''){
            $admin->password = Hash::make($request->password);
            $admin->save();
        }


        if ($request->hasFile('avatar')) {
            $admin->clearMediaCollection('avatars');
            $admin->addMedia($request->avatar)->preservingOriginal()->toMediaCollection('avatars');
        }

        \Session::flash('success' , 'تم تعديل المشرف بنجاح');
        
        if($request->edit_admin == 'edit_admin') {
            return redirect()->route('admins.index');
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        $admin->clearMediaCollection('avatars');
        $admin->delete();

        \Session::flash('success' , 'تم حذف المشرف بنجاح');
        return redirect()->route('admins.index');
    }


    public function superAdmin(Admin $admin)
    {
        return view('admins.profile.edit' , ['admin' => $admin]);
    }
}
