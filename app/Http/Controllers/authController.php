<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class authController extends Controller
{
    // Login
    public function login()
    {
        return view('Auth.Login');
    }

    //validate login
    public function validateLogin(Request $request)
    {
        // validate
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib di isi',
            'password.required' => 'password Wajib di isi',
        ]);

        // validate input request
        $datalogin = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];
        if(Auth::attempt($datalogin)){
            //hak akses
            if(Auth::user()->role == 'peternak'){
                return redirect('/dashboard/peternak');
            } 
            elseif(Auth::user()->role == 'pabrik'){
                return redirect('/dashboard/pabrik');
            }
            // return redirect('/dashboard/peternak');
        }
        else{
            return redirect('/')->withErrors('Email atau Password tidak sesuai!')->withInput();
        }
    }

    //logout
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
