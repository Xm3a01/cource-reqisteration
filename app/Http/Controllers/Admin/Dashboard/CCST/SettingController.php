<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Link;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public  $mediaTypes = [
        '',
        'Twitter',
        'Facebook',
        'Instagram',
        'Linkedin',
        'Skype'
    ];
   
    public function index()
    {
        $setting = Setting::latest()->first();
        return view('admins.dashboard.settings.index' , ['setting' => $setting]);
    }


    public function create()
    {
        return view('admins.dashboard.settings.create' , ['mediaTypes' => $this->mediaTypes]);
    }

    public function store(Request $request)
    {
        
        $setting = Setting::create($request->except('image'));

        if ($request->has('image')) {
            $ex = $request->image->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $setting->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('settings');
    }

    if($request->link){
          $this->storgeLink($request->link , $setting);
    }
    
    \Session::flash('success' , 'The operation successfully done !');
    return redirect()->route('settings.index');

    }
    
    public function edit(Setting $setting)
    {
        return view('admins.dashboard.settings.edit' , ['setting' => $setting , 'mediaTypes' => $this->mediaTypes]);
    }
   
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request , [
            'name' => 'required'
        ]);
            $setting->update($request->except('image'));
            if ($request->has('image')) {
                $setting->clearMediaCollection('settings');
                $ex = $request->image->getClientOriginalExtension();
                $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
                $setting->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('settings');
            }

        if($request->link){
            $this->storgeLink($request->link , $setting);
        }
        
        \Session::flash('success' , 'The operation successfully done !');
        return redirect()->route('settings.index');
    }


    public function storgeLink($links , $setting)
    {
        foreach($links as $index => $link) {

                
            if($link != "value" && $link != '') {
                $setting->links()->create([
                    'name' =>'media_'.$index,
                    'link' => $link,
                    's_icon' => $index,
                ]);
            }
        }
    }

}
