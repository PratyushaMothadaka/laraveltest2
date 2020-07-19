<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;

class EmpController extends Controller
{
    public function show($empid){
        //$data = DB::table('empdetails')->where('empid',$empid)->first();
        //$data=Employee::where('empid',$empid)->first(); // when we generate eloquent model
        //dd($data);
        /*if(! $data)
        {
            abort(404);
        }*/
        return view('emp',[
            $data => Employee::where('empid',$empid)->firstOrFail() // Route Model Binding
        ]);
    }
}