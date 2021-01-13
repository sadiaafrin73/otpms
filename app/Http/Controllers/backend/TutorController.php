<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function tutor_request()
    {
        return view('backend.partials.tutor_request');
    }
    public function tutor_list()
    {
        $tutor=User::where('role','=','tutor')->get();
        return view('backend.partials.tutor_list',compact('tutor'));
    }
}
