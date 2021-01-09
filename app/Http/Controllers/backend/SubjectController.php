<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Classnumber;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    public function subject()
    {
        $gr=Group::get();
        $cl=Classnumber::get(); 
        return view('backend.partials.subject',compact('gr','cl'));
    }
    public function addsubject(Request $req)
    {
        $req->validate([
            'subject_name'=>'required',
            'group'=>'required',
            'class'=>'required|numeric'
        ]);
   
    Subject::create([
        'name'=>$req->input('subject_name'),
        'group_id'=>$req->input('group'),
        'classnumber_id'=>$req->input('class')
      
    ]);
   return redirect()->back();
    
        
    }
    public function subjectlist()
    {
        $list=Subject::get();
        return view('backend.partials.subjectlist',compact('list'));
    }
   
    public function deletesubject($id)
    {
       $subject=Subject::find($id);
       if(!empty($subject))
       {
           $subject->delete();
           $message="subject deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }
    public function viewsubject($s_id)
    {
            $subject=Subject::find($s_id);
            return view('backend.partials.view_subject_info',compact('subject'));
    }
    public function editsubject($id)
    {
        $subject=Subject::find($id);

        return view('backend.partials.edit_subject_info',compact('subject'));

    }
    public function updatesubject(Request $req,$id)
    {
        
        $req->validate([
            'subject_name'=>'required',
            'group'=>'required',
            'class'=>'required|numeric'
        ]);

       $subject=Subject::find($id);
       $subject->update([
        'name'=>$req->input('subject_name'),
        'group'=>$req->input('group'),
        'class'=>$req->input('class')
       ]);
      

       return redirect()->back()->with('message','Subject Updated Successfully.');
    }


    
}
