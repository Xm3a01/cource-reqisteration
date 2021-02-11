<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Gallery;
use App\Traits\HasImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    use HasImage;
    
    public function index()
    {
        $galleries = Gallery::paginate(100);

        return view('admins.dashboard.galleries.index',['galleries' => $galleries]);
    }
    public function create()
    {
        return view('admins.dashboard.galleries.create');
    }

    public function store(Request $request)
    {
        // return $request->date;
        $this->validate($request , [
            'title' => 'required',
            'content' => 'required',
            'date' => 'required|date'
        ]);

        $gallery = Gallery::create($request->except('image'));

        if($request->hasFile('image')) {
            // $this->storeImage($gallery , $request->image , 'galleries');
            $gallery->addMedia($request->image)->toMediaCollection('galleries');
        }

        \Session::flash('success' , 'Gallery add successfully');
        return redirect()->route('galleries.index');
    }

    public function edit(Gallery $gallery)
    {
        return view('admins.dashboard.galleries.edit', ['gallery' => $gallery]);
    }

    public function update(Request $request , Gallery $gallery)
    {
        $this->validate($request , [
            'title' => 'required',
            'content' => 'required'
        ]);

        $gallery->update($request->except('image'));

        if($request->hasFile('image')) {
            $gallery->clearMediaCollection('galleries');
            $gallery->addMedia($request->image)->toMediaCollection('galleries');
        }

        \Session::flash('success' , 'Gallery update successfully');
        return redirect()->route('galleries.index');

    }

    public function destroy(Gallery $gallery)
    {
        if($gallery->image) {
            $gallery->clearMediaCollection('galleries');
        }

        $gallery->delete();
        \Session::flash('success' , 'Gallery delete successfully');
        return redirect()->route('galleries.index');
    }

}
