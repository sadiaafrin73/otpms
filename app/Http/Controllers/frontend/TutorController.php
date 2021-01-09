<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{

    public function registration(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required', 
            'address'=>'required',
            'mobile_number'=>'required',
            'gender'=>'required',
            'educational_qualification'=>'required'
         ]);
  

         $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'role'=>'tutor'
         ]);
  
         Tutor::create([  
             'user_id'=>$user->id,
              'educational_qualification'=>$request->educational_qualification,
              'experience'=>$request->experience
          ]);
  
          return redirect()->back()->with('message','Tutor Registration Successful.');
  
    }
    public function tutor_requestshow()
    {
        $list=Tutor_Request::all();
        return view('backend.partials.tutor_request',compact('list'));
    }
    public function tutorlogin()
    {
        return view('frontend.partials.tutor');
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
    public function tutorlogout()
    {
        //logout here
        Auth::logout();
        dd( Auth::logout());
        return redirect(route('homef'));



    }
}
