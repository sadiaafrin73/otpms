<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tutionlist;
use Illuminate\Http\Request;


class ReportController extends Controller
{
  
    public function report()
    {
        $list=Tutionlist::with('hastutor','studentR','hassubject')->paginate(5);

        return view('backend.partials.report',compact('list'));
    }
    public function date_submit(Request $request){

        // dd($request->all());
        $list=Tutionlist::whereBetween('created_at',[$request->date,$request->date1])->paginate(10);
        //  dd($list);
        return view ('backend.partials.report',compact('list'));
    }
    public function report_print()
    {
     $report=Tutionlist::with('hastutor','studentR','hassubject')->get();


    $pdf = app('dompdf.wrapper');

      $pdf =$pdf->loadView('backend.partials.print', compact('report'));
        //  return view('backend.partials.print',compact('report'));

        return $pdf->download('invoice.pdf');
     }
}
