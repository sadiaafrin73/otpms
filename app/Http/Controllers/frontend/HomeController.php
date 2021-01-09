<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tution;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeindex()
       {
          $tution=Tution::where('is_approved','=','approved')->get();
          
    return view('frontend.home',compact('tution'));
       }
}
