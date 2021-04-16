<?php

namespace App\Hellper;

use Illuminate\Support\Facades\Validator;


class Validation {

    public static  function make($data)
    {
        $validator =  Validator::make($data,[
            'name' => 'required|min:10',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required|numeric|regex:/(0)[0-9]{9}/',
            'address' => 'required',
            'gender' => 'required',
            'birthday' => 'required|before:today',
            'level' => 'required',
            'job_title' => 'required',
            'coures_time' => 'required',
            'whenWasthat' => 'required',
            'whatsapp' => 'regex:/^0[0-9]{9}$/',
            'email' => 'required|email',
        ],
          [
            'phone.regex' => 'The :attribute must start with 0 and must be 10 number',
            'whatsapp.regex' => 'The :attribute number must start with 0 and must be 10 number'
        ]);
      
         return $validator;
    }
}