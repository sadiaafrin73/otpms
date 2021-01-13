<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tution;
use App\Models\Tutor;
use App\Models\User;
use App\Models\Tutionlist;
use Illuminate\Http\Request;

class TutionController extends Controller
{
 
    public function tution_post_request()
    {
        $list=Tution::with('tutor')->paginate(5);

        return view('backend.partials.tution_post_request',compact('list'));
    }
   public function tution_approved($id){

    
       $data=Tution::where('id','=',$id)->first();

    if($data->is_approved == null){
        $data->update([
            'is_approved'=>'approved',
        ]);  
    }else{
        $data->update([
            'is_approved'=>null,
        ]);
    }

       return redirect()->back();
     
    }
    public function show_tutionlist()
    {
        $list=Tutionlist::with('hastutor','studentR','hassubject')->paginate(5);
        return view('backend.partials.tutionlist',compact('list'));
    }
    public function view_tutionlist($t_id)
    {
        $viewlist=Tutionlist::with('hastutor','studentR','hassubject')->find($t_id);;
       
        return view('backend.partials.view_tutionlist',compact('viewlist'));
    }
   
   
}

