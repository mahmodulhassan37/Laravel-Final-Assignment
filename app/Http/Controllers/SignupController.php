<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
      function index(){

    	return view('Signup');
    }


    public function signup(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'empname' => 'required|max:20',
           
            'companyname' => 'required|email',
            'contactno' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

    	if ($validate->fails()) {
    		return redirect('/signup')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$user = new User;
            $user->id = NULL;
            $user->empname = $req->empname;
            $user->companyname = $req->companyname;
            $user->contactno = $req->contactno;
            $user->username = $req->username;
            $user->password = $req->password;
           

            if ($user->save()) {
                return redirect('/login')->withErrors('Login with new ');
            }               
            else
            {
                return redirect('/signup')
                                ->withErrors('SignUp Failed');
            }
    	}
    }
}
