<?php

namespace App\Http\Controllers\Website;

use App\Ads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Ads::latest()->paginate(100);

        return view('website.event',['events' => $events]);
    }
}
