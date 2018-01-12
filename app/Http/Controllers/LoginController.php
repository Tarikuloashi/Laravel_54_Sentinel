<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

class LoginController extends Controller
{
    public function login(){
    	return view ('authentication.login');
    }

    public function postLogin(Request $request){
    	//dd($request->all());
    	Sentinel::authenticate($request->all());

    	// return Sentinel::check();
    	//return redirect('/login');
        $slugg=Sentinel::getUser()->roles()->first()->slug;

        if($slugg=='admin')
            return redirect('/earnings');
        elseif($slugg=='manager')
            return redirect('/tasks');
    }

    public function logout(){
    	Sentinel::logout();
    	return redirect('/login');

    }
}
