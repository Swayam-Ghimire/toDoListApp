<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class AuthController extends Controller
{
    public function authRegister(){
        // route /auth/register
        return view('auth.register');
    }

    public function authLogin(){
        // route /auth/login
        return view('auth.login');
    }

    public function register(Request $request){
        // route auth/register => Submission
        $validate=$request->validate([
            'first'=>'required|string|min:2',
            'last'=>'required|string|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|max:15|confirmed',
        ]);
        $user = User::create($validate);
        // Auth::login($user);
        return redirect()->route('auth.login')->with(['success'=>'User Registered Successfully! Please log in']);
    }   

    public function login(Request $request){
        // route auth/login => Submission
        $validate = $request->validate([
            'email' =>'required|email',
            'password'=>'required|string',
        ]);
        if (Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->route('test.home');
        }
        else {
            throw ValidationValidationException::withMessages(['credential'=>"Credential not verified"]);
        }

    }

    public function authLogout(Request $request){
        // route auth/logout
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with(['success'=>'Logged out Successfully']);
    }
}

