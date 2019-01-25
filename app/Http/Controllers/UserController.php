<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use  Auth;

class UserController extends Controller
{
    public function create(){

       return view('User.register');
    }
     public function store(Request $request){
    	$user = new User();
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=bcrypt($request->password);
    	$user->save();
    	return redirect('/')->with('success','you log in  now!!!');
    }
    public function login(){
    	return view('User.login');
    }
     public function auth(Request $request){
     if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
      	return redirect('/');
      }else{
      	return redirect('/login')->with('fail','check your email or password');
      }
    }
    public function logout(){
          Auth::logout();
          return redirect('/');
    }
}
