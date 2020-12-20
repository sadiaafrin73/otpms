<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subject()
    {
        return view('backend.partials.subject');
    }
    public function subjectlist()
    {
        $list=Subject::get();
        return view('backend.partials.subjectlist',compact('list'));
    }
    public function addsubject(Request $req)
    {
   
    Subject::create([
        'name'=>$req->input('subject_name'),
        'group'=>$req->input('group'),
        'class'=>$req->input('class')
    ]);
   return redirect()->back();
    
        
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
