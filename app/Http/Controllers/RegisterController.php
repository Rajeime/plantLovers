<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function index(){
        return  view('auth.register');
    }


    public function store(RegisterRequest $request, User $user){
     
       //validate input
        $validateField = $request->validated();

       //bcrypt password
        // $password = bcrypt($validateField['password']);
        $hashedPassword = Hash::make($validateField['password']);

       //store user
       $user->create([
            'name' => $validateField['name'],
            'role_id'=> 1,
            'email' => $validateField['email'],
            'phone' => $validateField['phone'],
            'password' => $hashedPassword
       ]);

       return redirect()->route('plant.index')->with('success','You successfully logged in');
    }
}
