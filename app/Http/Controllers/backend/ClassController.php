<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Classnumber;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function class()
    {
      
        return view('backend.partials.classnumber');
    }
    public function classsubmit(Request $req)
    {
        $req->validate([
            
            'class'=>'required|numeric'
           
        ]);
   
    Classnumber::create([

        'class'=>$req->input('class')

    ]);
   return redirect()->back();
    
        
    }
}
