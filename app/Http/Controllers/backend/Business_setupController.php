<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Business_setupController extends Controller
{
    public function business_setup()
    {
        return view('backend.partials.business_setup');
    }
}
