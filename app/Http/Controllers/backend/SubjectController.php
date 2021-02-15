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
        $list=Subject::with('group')->get();
        return view('backend.partials.subjectlist',compact('list'));
    }
   
   
   

    
}
