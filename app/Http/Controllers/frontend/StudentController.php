<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function registration(Request $request)
    {



        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'address'=>'required',
            'mobile_number'=>'required',
            'gender'=>'required'            
            
         ]);
  
  
          User::create([
             
              'name'=>$request->name,
              'email'=>$request->email,
              'password'=>bcrypt($request->password),
              'address'=>$request->address,
              'mobile_number'=>$request->mobile_number,
              'gender'=>$request->gender,
              'role'=>'student'
              
          ]);
  
          return redirect()->back()->with('message','student Registration Successful.');
  
    }
    public function studentlist()
    {
        
        
        $list=User::where('role','=','student')->get();
        return view('backend.partials.student',compact('list'));
       
    

    }


    public function login()
    {
        return view('frontend.partials.student_login');
    }
    public function login_submit(Request $request)
    {
        $request->validate([
            
            'email'=>'required|email',
            'password'=>'required'     
        ]);
        
    $login_info=$request->except(['_token']);

    // dd(Auth::attempt($login_info));
    if (Auth::attempt($login_info)) {
        $request->session()->regenerate();
        return redirect()->intended('/homef');
    }
    else
    {
        return redirect()->back()->withErrors('Invalid Credentials');
    }
    


    }
}
