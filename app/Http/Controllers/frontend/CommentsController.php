<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments_submit(Request $req)
    {

   
    Comments::create([
        
        'student_id'=>auth()->user()->id,
        'tutor_id'=>$req->tutor_id,
        'comments'=>$req->input('comments')
       
    ]);
   return redirect()->back();
    
}
}
