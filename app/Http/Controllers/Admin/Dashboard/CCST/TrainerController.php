<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Link;
use App\Trainer;
use App\MediaLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
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
        $trainers = Trainer::paginate(100);
        // dd($events);
        return view('admins.dashboard.trainers.index' , ['trainers' => $trainers]);
    }

    
    public function create()
    {
        return view('admins.dashboard.trainers.create' , ['mediaTypes' => $this->mediaTypes]);
    }

   
    public function store(Request $request)
    {
        
        $this->validate($request , [
            'name' => 'required',
            'job_title' => 'required',
            'description' => 'required',
        ]);
        $trainer = Trainer::create($request->except(['image' , 'link']));

        if ($request->has('image')) {
            $ex = $request->image->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
        //    dd($request->image);
            $trainer->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('trainers');
        }
        

        if($request->link){
            foreach($request->link as $index => $link) {

                
                if($link != "value" && $link != '') {

                    // dd($request->link);
            
                    $trainer->links()->create([
                        'name' =>'media_'.$index,
                        'link' => $link,
                        'icon' => $index,
                    ]);
                }
            }
        }

        \Session::flash('success' , 'Ads save successfully');
        return redirect()->route('trainers.index');
    
  }

   
   
    public function edit(Trainer $trainer)
    {
        $trainer->load('links');
       return view('admins.dashboard.trainers.edit' , ['trainer' =>  $trainer , 'mediaTypes' => $this->mediaTypes]);
    }

    
    public function update(Request $request, Trainer $trainer)
    {
        $this->validate($request , [
            'name' => 'required',
            'job_title' => 'required',
            'description' => 'required',
        ]);

        $trainer->update($request->except('image'));

        if ($request->has('image')) {
            $trainer->clearMediaCollection('trainers');
            $ex = $request->image->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
        //    dd($request->image);
            $trainer->addMedia($request->image)->usingFileName($fileName)->toMediaCollection('trainers');
        }

        if($request->link){
            foreach($request->link as $index => $link) {

                
                if($link != "value" && $link != '') {

                    // dd($request->link);
            
                    $trainer->links()->create([
                        'name' =>'media_'.$index,
                        'link' => $link,
                        'icon' => $index,
                    ]);
                }
            }
        }

        \Session::flash('success' , 'Ads update successfully');
        return redirect()->route('trainers.index');

    }

    
    public function destroy(Trainer $trainer)
    {
        if ($trainer->image) {
            $trainer->clearMediaCollection('trainers');
        }

        $trainer->delete();

        \Session::flash('success' , 'Ads delete successfully');
        return redirect()->route('trainers.index');
    }
}
