<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use DB;

class UserController extends Controller


{
	public function loginSignupPage(){

    }

    public function login(){

    }

    public function signup(){
    	
    }

    public function forgetPassword(){

    }


    public function user_login(Request $request)
    {
        $user_email=$request->input('email');
        $user_password=$request->input('password');
    

        $result=DB::table('users')->where('email',$user_email)
        ->where('password',$user_password)
        ->first();

    	if ($result) {
        	echo "Ok.";
        	echo $result->id;
    	}
    	else {
        	echo "Email or password is incorrect.";
    	}
  }
     
    public function user_registration(Request $request)
    {
        $data=array();
        $name=$data['name']=$request->input('name');
        $email=$data['email']=$request->input('email');
        $password=$data['password']=$request->input('password');
        $data['remember_token']=Str::random(60);

        echo DB::table('users')->insert($data);

        echo " so ok";
    }
}
