<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   

    public function create(Request $request){

    	$m = new User;
    	$m->name =$request->name;
    	$m->email =$request->email;
    	$m->role =$request->role;
        $m->password =bcrypt($request->password);
    	$m->departmentId =$request->deptId;
    	$m->save();

    }

    public function agents(){
        
        $agents = User::where('role','messenger')->get();
        return $agents;

    }



}
