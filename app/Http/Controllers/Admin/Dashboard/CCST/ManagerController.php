<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers= Admin::where('is_supervisor' , 1)->paginate(100);
        return view('admins.dashboard.managers.index' , ['managers' => $managers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.dashboard.managers.create');
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
            'email' => 'required|email|unique:admins',
            'password' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'address' => 'required',
            'gender' => 'required'
        ]);


        $data['password']  = Hash::make($request->password);

        $admin = Admin::create($data);

        if ($request->has('avatar')) {
            // $admin->clearMediaCollection('avatars');
            $admin->addMedia($request->avatar)->preservingOriginal()->toMediaCollection('avatars');
        }

        \Session::flash('success' , 'تم حفظ المشرف بنجاح');
        return redirect()->route('managers.index');
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
    public function edit(Admin $manager)
    {
        return view('admins.dashboard.managers.edit' , ['manager' => $manager]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $manager)
    {
        $manager->update($request->except(['avatar' , 'password']));

        if($request->has('password') && $request->password != ''){
            $manager->password = Hash::make($request->password);
            $manager->save();
        }


        if ($request->hasFile('avatar')) {
            $manager->clearMediaCollection('avatars');
            $manager->addMedia($request->avatar)->preservingOriginal()->toMediaCollection('avatars');
        }

        \Session::flash('success' , 'تم تعديل المشرف بنجاح');
        
         return redirect()->route('managers.index');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $manager)
    {
        if($manager->avater) {
           $manager->clearMediaCollection('avatars');
        }
        $manager->delete();

        \Session::flash('success' , 'تم حذف المشرف بنجاح');
        return redirect()->route('managers.index');
    }


    public function superAdmin(Admin $admin)
    {
        return view('admins.profile.edit' , ['admin' => $admin]);
    }
}
