<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tution;
use App\Models\User;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Classnumber;
use App\Models\Tutionlist;

class TutionController extends Controller
{
    public function tution_post()
    {
        $sn=Subject::get();
        $gr=Group::get();
        $cl=Classnumber::get();
        return view('frontend.partials.tution_post',compact('sn','gr','cl'));
    }
    public function tution_post_submit(Request $req)
    {

       
        $req->validate([
            
            'name'=>'required',
            'group'=>'required',
            'class'=>'required|numeric',
            'schedule_day'=>'required',
            'schedule_time'=>'required',
            'address'=>'required',
            'tution_fee'=>'required'

        ]);
   
    Tution::create([
        'name_id'=>$req->input('name'),
        'tutor_id'=>auth()->user()->id,
        'group_id'=>$req->input('group'),
        'classnumber_id'=>$req->input('class'),
        'schedule_day'=>$req->input('schedule_day'),
        'schedule_time'=>$req->input('schedule_time'),
        'address'=>$req->input('address'),
        'tution_fee'=>$req->input('tution_fee')
    ]);
   return redirect()->back();
    
        
    }
    public function tutionpost_details($id)
    {
        $tutiondetails=Tution::with('tutor.tutorR')->find($id);

       

        return view('frontend.partials.tutionpost_details',compact('tutiondetails'));
    }
    public function showtutionlist(Request $req)
    {

        $tution = Tution::find($req->post_id);

        Tutionlist::updateOrcreate([
            'tutor_id'=>$tution->tutor_id,
            'student_id'=>auth()->user()->id,
            'tution_id' => $tution->id
        ]);

        return redirect()->back()->with('message','Tution Enrollment Successful');
       
        
    }
    public function mytution()
    {
   
      $student=Tutionlist::where('student_id','=',auth()->user()->id)->with('hastutor','hassubject')->paginate(5);
   
        return view('frontend.partials.student_my_tution',compact('student'));
    }
    public function my_tution()
    {
   
       
        $tutionlist=Tutionlist::where('tutor_id','=',auth()->user()->id)->with('studentR','hassubject')->paginate(5);
      
        return view('frontend.partials.tutor_my_tution',compact('tutionlist'));
    }
    public function my_tution_post()
    {
   
        $post=Tution::where('is_approved','=','approved')->where('tutor_id','=',auth()->user()->id)->get();
        
        return view('frontend.partials.my_tution_post',compact('post'));
    }
    public function view_my_tution($t_id)
    {
        $view=Tution::with('tutor','subjectname')->find($t_id);;
        return view('frontend.partials.view_my_tution_post',compact('view'));
    }
    public function viewmytution_s($id)
    {
        $tutionview=Tution::with('tutor','subjectname')->find($id);;
        return view('frontend.partials.view_student_my_tution',compact('tutionview'));
    }
    public function deletemytution_s($id)
    {
       $deletetution=Tutionlist::find($id);
       if(!empty($deletetution))
       {
        $deletetution->delete();
           $message="Tution deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    } 
     
}

