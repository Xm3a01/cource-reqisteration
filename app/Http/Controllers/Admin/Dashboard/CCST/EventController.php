<?php

namespace App\Http\Controllers\Admin\Dashboard\CCST;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
   
    public function index()
    {
        return view('admins.dashboard.events.index');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
