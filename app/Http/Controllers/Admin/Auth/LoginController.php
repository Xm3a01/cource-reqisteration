<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    
   
            
    // protected $redirectTo = '/admins/dashboard';


    public function showAdminLoginForm()
    {
        return view('admins.auth.login');
    }


    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('admins.dashboard'));
        }
        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admins.login');
    }
}
