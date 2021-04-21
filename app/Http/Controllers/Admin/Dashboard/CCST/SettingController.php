<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Link;
use App\About;
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
        // return $setting->images;
        $about = About::latest()->first();
        return view('admins.dashboard.settings.index' , ['setting' => $setting , 'about' => $setting]);
    }


    public function create()
    {
        return view('admins.dashboard.settings.create' , ['mediaTypes' => $this->mediaTypes]);
    }

    public function store(Request $request)
    {

        $this->validate($request , [
            'name' => 'required',
            'location' => 'required',
            'call' => 'required',
            'email' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        // dd($request->image);
        \DB::transaction(function () use($request) {
            $setting = Setting::create($request->except(['image' , 'title' , 'content']));
    
                if ($request->has('image')) {
                    foreach ($request->image as $key => $image) {
                        if($key == 4)
                         break;

                        $this->storeImage($image , 'settings' , $setting);
                    }
                }
    
                $about = new About();
                $about->title = $request->title;
                $about->content = $request->content;
                $about->save();


                if ($request->has('aboutImage')) {
                    $this->storeImage($request->aboutImage , 'abouts' , $about);
                }
        
        
                if($request->link){
                    $this->storgeLink($request->link , $setting);
                }
            });
            

    
    \Session::flash('success' , 'The operation successfully done !');
    return redirect()->route('settings.index');

    }
    
    public function edit(Setting $setting)
    {
        return view('admins.dashboard.settings.edit' , ['setting' => $setting , 'mediaTypes' => $this->mediaTypes , 'about' => About::latest()->first()]);
    }
   
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request , [
            'name' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);


        \DB::transaction(function () use($request , $setting) {
            
            $setting->name = $request->name;
            $setting->location = $request->location;
            $setting->call = $request->phone;
            $setting->email = $request->email;
            $setting->save();
    
            if ($request->has('image')) {
                foreach ($request->image as $key => $image) {
                $setting->clearMediaCollection('settings');
                    if($key == 4)
                       break;
                    $this->storeImage($image , 'settings' , $setting);
                }
            }
    
            $about = About::latest()->first();
    
            $about->title = $request->title;
            $about->content = $request->content;
            $about->save();
    
            if ($request->has('aboutImage')) {
                $about->clearMediaCollection('abouts');
                $this->storeImage($request->aboutImage , 'abouts' , $about);
            }
    
            if($request->link){
                $this->storgeLink($request->link , $setting);
            }
        });
        
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

    public function storeImage($file , $collection , $model)
    {
        // if ($request->has('image')) {
            $ex = $file->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $model->addMedia($file)->usingFileName($fileName)->toMediaCollection($collection);
        // }
    }

}
