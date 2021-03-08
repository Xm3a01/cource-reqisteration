<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // "/^\+?[0-9]+$/"
        return [
            'name' => 'required|min:10',
            'username' => 'required',
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
        ];
    }


    public function messages()
{
    return [
        'phone.regex' => 'The :attribute must start with 0 and must be 10 number',
        'whatsapp.regex' => 'The :attribute number must start with 0 and must be 10 number'
    ];
}
}
