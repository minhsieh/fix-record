<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

#Facades
use Auth;
use Crypt;

use User;

class LoginController extends Controller
{
    public function index()
    {
    	if(Auth::check()){
    		return redirect('/manage');
    	}
    	return view('login.index');
    }

    public function login(Request $request)
    {
    	if(Auth::attempt(['username' => $request->input('username') , 'password' =>$request->input('password')])){
    		return response()->json(['auth' => true]);
    	}else{
    		return response()->json(['auth' => false]);
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
