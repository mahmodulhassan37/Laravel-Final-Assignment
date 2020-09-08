<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    function index(){

    	return view('login.index');
    }

    function verify(Request $request){
    	



        $user = new User();
       
        $data = $user->where('username', $request->username)
                        ->where('password', $request->password)
                        ->get();

       

    	if(count($data) > 0 ){
            $request->session()->put('username', $request->username);
            if($request->username == $data[0]['type']){
                $request->session()->put('type', "admin");
            }
    		return redirect('/home');

    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
}
