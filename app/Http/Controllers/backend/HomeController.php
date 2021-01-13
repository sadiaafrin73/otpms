<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
       {
         $list=User::where('role','=','student')->count();
         $tutor=User::where('role','=','tutor')->count();
             return view('backend.home',compact('list','tutor'));
       }
}
