<?php

namespace App\Http\Controllers\Website;

use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::with('links')->get();
        return view('website.trainers' , ['trainers' => $trainers]);
    }
}
