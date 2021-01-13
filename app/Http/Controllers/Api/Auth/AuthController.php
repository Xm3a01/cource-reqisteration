<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiAuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiAuthenticatesUsers;
    
    public function login(Request $request)
    {
        return $this->apiLogin($request);      
    }

    public function logout(Request $request)
    {
        // return $request->token;
        $error = Validator::make($request->all() , [
            'token'=> 'required',
        ]);
        if($error->fails()){   
            return response()->json(['error'=>$error->messages(),'code' =>401]);
        }
        return $this->apiLogout($request);
    }

    public function register(Request $request)
    {
        $error = Validator::make($request->all() , [
            'email'=> 'email|unique:users',
            'password' => 'min:8|confirmed'
        ]);
        if($error->fails()){   
            return response()->json(['error'=>$error->messages(),'code' =>401]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
         return $this->apilogin($request);
    }
}