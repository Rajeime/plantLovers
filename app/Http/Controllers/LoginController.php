<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
             // Authentication passed...
        return redirect()->intended('/plant');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('plant.index');
    }
}
