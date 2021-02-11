<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Ads;
use App\Traits\HasImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
   use HasImage;
   
    public function index()
    {
        $events = Ads::paginate(100);
        // dd($events);
        return view('admins.dashboard.events.index' , ['events' => $events]);
    }

    
    public function create()
    {
        return view('admins.dashboard.events.create');
    }

   
    public function store(Request $request)
    {
        // dd($request->image);
        $this->validate($request , [
            'name' => 'required',
            'content' => 'required',
            'place' => 'required',
            'date' => 'required|date'
        ]);
        $event = Ads::create($request->except('image'));

        if ($request->hasFile('image')) {
            //  $this->storeImage($event , $request->image , 'events');

            $event->addMedia($request->image)->toMediaCollection('events');
        }
        \Session::flash('success' , 'Ads save successfully');
        return redirect()->route('events.index');
    }

   
   
    public function edit(Ads $event)
    {
       return view('admins.dashboard.events.edit' , ['event' =>  $event]);
    }

    
    public function update(Request $request, Ads $event)
    {
        $this->validate($request , [
            'name' => 'required',
            'content' => 'required',
            'place' => 'required',
            'date' => 'required'
        ]);

        $event->update($request->except('image'));

        if ($request->hasFile('image')) {
            $this->deleteImage($event , 'events');
            $this->storeImage($event , $request->image , 'event');
        }

        \Session::flash('success' , 'Ads update successfully');
        return redirect()->route('events.index');

    }

    
    public function destroy(Ads $event)
    {
        if ($event->image) {
            // $this->deleteImage($event , 'events');
            $event->clearMediaCollection('events');
        }

        $event->delete();

        \Session::flash('success' , 'Ads delete successfully');
        return redirect()->route('events.index');
    }
}
