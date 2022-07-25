<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    
    public function register(Request $request){
        $credentials = $request->validate(
            [
                'username' => ['required'],
                'name' => ['required'],
                'password' => ['required','confirmed'],
                'email' => ['required'],
            ]);

        if ($credentials){
            User::factory()->create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
             ]);

             if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('home');
            }
        }
        
        return back()->withErrors([
            'username' => 'Please provide username.',
            'name' => 'Please provide name.',
            'password' => 'The provided password is blank.',
            'email' => 'Please provide a valid email address.',
        ])->onlyInput('username');

       
    }
}
