<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tutor;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function login()
    {
        return view('frontend.partials.tutor');
    }
    public function login_submit(Request $req)
    {
   
    Tutor::create([
        'email'=>$req->input('email'),
        'password'=>$req->input('password'),
        
    ]);
   return redirect()->back();
    }
}
