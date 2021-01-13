<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->role =='student'){
            return $next($request); 
        }
       
        return redirect()->route('student.login')->withErrors('You are not Student.');
        
    }
}
