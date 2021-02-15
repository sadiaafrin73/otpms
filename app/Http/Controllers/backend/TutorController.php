<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function tutor_request()
    {
        return view('backend.partials.tutor_request');
    }
    public function tutor_list()
    {
        $tutors=
        $tutor=User::where('role','=','tutor')->get();
        return view('backend.partials.tutor_list',compact('tutor', 'tutors'));
    }
    public function view_tutor($t_id)
    {
            $tutors=Tutor::with('user')->find($t_id);
           
            return view('backend.partials.view_tutorlist',compact('tutors'));
    }
    public function delete_tutor($id)
    {
       $tutor=User::find($id);
       if(!empty( $tutor))
       {
        $tutor->delete();
           $message="Tutor deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }

}
