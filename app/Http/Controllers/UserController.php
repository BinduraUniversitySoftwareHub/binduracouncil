<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        public function __construct()
    {
        $this->middleware('registry');
      
        
    }

    public function create(Request $request){

    	$m = new User;
    	$m->name =$request->name;
    	$m->email =$request->email;
    	$m->role =$request->role;
    	$m->password =bcrypt($request->password);
    	$m->departmentId =$request->departmentId;
    	$m->save();

    }



}
