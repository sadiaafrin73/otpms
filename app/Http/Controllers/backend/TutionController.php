<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutionController extends Controller
{
 
    public function tution()
    {
        return view('backend.partials.tution');
    }
}
