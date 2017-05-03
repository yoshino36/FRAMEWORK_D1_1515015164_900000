<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Auth\SessionGuard;

use App\Pengguna;

use Auth;

class SesiController extends Controller
{
    public function index(){
    	return view('master');
    }

    public function form(){
    	if(Auth::check()){
    		return redirect('/');
    	}
    	return view('login');
    }

    public function validasi(Request $input){
    	$this->validate($input,[
    		'username'=>'required',
    		'password'=>'required',
    		]);
    	$Pengguna = Pengguna::where($input->only('username','password'))->first();
    	if(! is_null($Pengguna)){
    		Auth::login($Pengguna);
    		if(Auth::check()){
    			return redirect('/')->with('informasi', 'Welcome '.Auth::user()->username);
    		}
    	}
    	return redirect('/login')->withErrors(['User Not Found']);
    }

    public function logout(){
		if(Auth::check()){
			Auth::logout();
    		return redirect('/login')->withErrors(['Please Login']);
    	}else{
    		return redirect('/login')->withErrors(['Please Login']);
    	}
    }
}