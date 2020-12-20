<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function tutor_request()
    {
        return view('backend.partials.tutor_request');
    }
    public function tutor_list()
    {
        return view('backend.partials.tutor_list');
    }
}
