<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tution;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Classnumber;

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
        'student_id'=>auth()->user()->id,
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
        $tutiondetails=Tution::find($id);
        return view('frontend.partials.tutionpost_details',compact('tutiondetails'));
    }
    public function showtutionlist()
    {
       
        return view('frontend.partials.tutionlist');
    }
    
}