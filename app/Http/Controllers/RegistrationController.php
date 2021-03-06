<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    public function register(){
    	return view ('authentication.register');
    }

    public function postregister(Request $request){
        //when auto activare our user
    	//$user = Sentinel::registerAndActivate($request->all());
       
        $user = Sentinel::register($request->all());
        $activation = Activation::create($user); 

    	//define another roles of user
    	$role = Sentinel::findRoleBySlug('manager');
    	$role->users()->attach($user);

        $this->sendEmail($user, $activation->code);
    	return 'We send an email to confirm your account';
    }

    private function sendEmail($user, $code){
        Mail::send('emails.activation',[
            'user'=>$user,
            'code'=>$code],
            function ($message) use ($user){
                $message->to($user->email);
                $message->subject("Hello $user->first_name,activate your account.");
        });
    }
}
