<?php

namespace App\Http\Controllers\Website;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(100);
       return view('website.gallery' , ['galleries' => $galleries]);
    }
}
