<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdvaisorController extends Controller
{
    //use AuthenticatesUsers;

   

    public function login(){
        return view('login');
    }


    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    // authenticate user
    public function authenticate(Request $request){
        //dd($request);
        $formFields= $request->validate([
            'email' => 'required|email',
            'password' => 'required'
            
        ]);
        
        if(auth()->attempt($formFields)){
            $request -> session() -> regenerate();

            return redirect('/index');
        }
        return redirect('/')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

