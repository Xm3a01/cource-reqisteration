<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        return [
            'address'  => 'required',
            'username'  => 'required',
            'phone'  => 'required',
            'gender'  => 'required',
            'birthday'  => 'required',
            'level'  => 'required',
            'job_title'  => 'required',
            'coures_time'  => 'required',
            'username' => 'required|max:255|unique:users|regex:/^\S*$/u',
            'whenWasthat' => 'required',
            'whatsapp' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8'
        ];
    }
    public function message()
    {
        return [
            'username.regex' => 'This user name  content spaces !'
        ];
    }
}
