<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    public function register(){
    	return view ('authentication.register');
    }

    public function postregister(Request $request){
    	$user = Sentinel::registerAndActivate($request->all());
    	//define another roles of user
    	$role = Sentinel::findRoleBySlug('manager');
    	$role->users()->attach($user);
    	return redirect('/');
    }
}
