<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class accountscontroller extends Controller
{
    public function login(Request $request){
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        auth()->attempt($request->only('email','password'));
        return redirect('/');
    }

    public function signup(Request $request){
        $validated = $request->validate([
            'username'=> 'required|max:255',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed|min:6'
        ]);
        $user = new User();
        $username = $request->username;
        $email = $request->email;
        $pass = Hash::make($request->password);
        $user->username = $username;
        $user->email = $email;
        $user->password = $pass;
        $user->save();
        auth()->attempt($request->only('email','password'));
        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
