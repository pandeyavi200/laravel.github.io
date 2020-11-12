<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Atg extends Controller
{   
     
  
   

public function store(Request $request)
{   
   
   
    $result=DB::insert("insert into atg(name,email,Pincode) values(?,?,?)",[$request->input('name'),$request->input('email'),$request->input('pin')]);
    
    return redirect()->back()->with('success','Data Saved in Database');

   
}
}   
