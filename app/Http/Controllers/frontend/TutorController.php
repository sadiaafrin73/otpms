<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use App\Models\Tutor_Qualification;
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
            'mobile_number'=>'required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/',
            'gender'=>'required',
            'educational_qualification'=>'required'
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

         $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'image'=> $file_name,
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
      
        return redirect(route('homef'));

    }
    public function myprofile()

    {
        $tutor=Tutor::where('user_id','=', auth()->user()->id)->first();

        $qualifications =auth()->user()->qualifications()->get();

     
       
        return view('frontend.partials.tutor_my_profile',compact('tutor','qualifications'));
    }
    public function my_qualification(Request $request)
    {
        $request->validate([
            'examination'=>'required',
            'group_subject'=>'required',
            'institution'=>'required',
            'result'=>'required'
           
         ]);
  

        
  
         Tutor_Qualification::create([  
             
              'examination'=>$request->examination,
              'group_subject'=>$request->group_subject,
              'institution'=>$request->institution,
              'result'=>$request->result,
              'user_id'=>auth()->user()->id
          ]);
  


          return back();
         
  
    }

}
