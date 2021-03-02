<?php

namespace App\Http\Controllers\Website;

use App\Mail\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request = [
            'name' => 'name',
            'subject' => 'subject',
            'message' => 'subject',
        ];
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->email;
        // $contactName = Input::get('name');
        // $contactEmail = Input::get('email');
        // $contactMessage = Input::get('message');
        // $data = array('name'=>$contactName, 'email'=>$contactEmail, 'message'=>$contactMessage);
        try{
             \Mail::send(new Contact($request));
             return response()->json(['success' => 'شكرا على تواصلك']);
           } catch(\Exception $e) {
            // return response()->json(['error' => 'حدث خطاء اثناء العمليه']);
            return $e;
         }
    //      try{
    //      \Mail::send('mail', $data, function ($message) use ($contactEmail, $contactName) {
    //         $message->from($contactEmail, $contactName);
    //         $message->to('hashco28@gmail.com')->subject($data['subject']);
    //         return response()->json(['success' => 'شكرا على تواصلك']);
    //     });
    //   } catch(\Exception $e) {
    //     // return response()->json(['error' => 'حدث خطاء اثناء العمليه']);
    //     return $e;
    //  } 
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
