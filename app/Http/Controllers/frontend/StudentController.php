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
 
         $file_name='';

        //        step1- check has file
                    if($request->hasFile('image'))
                    {
                        $image=$request->file('image');
                       //step2- generate unique name
                        $file_name=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                       //step 3- store file with name
                        $image->storeAs('student_tutor_picture',$file_name);
        
                    }

          User::create([

             
              'name'=>$request->name,
              'email'=>$request->email,
              'password'=>bcrypt($request->password),
              'address'=>$request->address,
              'mobile_number'=>$request->mobile_number,
              'gender'=>$request->gender,
              'image'=> $file_name,
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
        return view('frontend.partials.student');
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
    public function my_profile()
    {
        
        return view('frontend.partials.student_my_profile');
    }

}
