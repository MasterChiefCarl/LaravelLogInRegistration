<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request){
        dd($request()->all());
    }
    public function loginAttempt(Request $request){
        
        $credentials = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required'],
            ]
            );
            
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('home');
            }

            return back()->withErrors([
                'username' => 'Please provide username.',
                'password' => 'The provided password is blank. INVALID OPTION.',
            ])->onlyInput('username');

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->to('/');
    }
}
