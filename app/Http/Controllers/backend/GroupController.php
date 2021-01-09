<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function group()
    {
      
        return view('backend.partials.group');
    }
    public function groupsubmit(Request $req)
    {
        $req->validate([
            
            'group'=>'required'
           
        ]);
   
    Group::create([

        'group'=>$req->input('group')

    ]);
   return redirect()->back();
    
        
    }
}
