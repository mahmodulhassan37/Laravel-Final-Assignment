<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   /* function Home(){

        return view('HomeView');
    }


    function about(){
        return  view('AboutView');
        
    }


    function contact(){
        return view('ContactView');

    }*/





    function index(){

    	return view('HomeView');
    }

    function validation(Request $request){
    	
    	if($request->username == $request->password){
    		//session
    		return redirect('/home');
    	}
    }
    
}
