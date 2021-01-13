<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.partials.user.login');
    }
    public function loginprocess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $login_info=$request->except(['_token']);

            // dd(Auth::attempt($login_info));
            if (Auth::attempt($login_info)) {
                return redirect()->intended('home');
            }
            else
            {
                return redirect()->back()->withErrors('Invalid Credentials');
            }
            
    }
    public function logout()
    {
        //logout here
        Auth::logout();
        return redirect()->route('dashboard');


    }

}
