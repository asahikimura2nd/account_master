<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;


use Illuminate\Http\Request;
// https://readouble.com/laravel/8.x/ja/authentication.html
// https://qiita.com/mpyw/items/c944d4fcbb45c1a3924c
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login_form');
    }
    public function login(LoginRequest $request ){
        dd($request->all());
        return view('login_form');
    }


    // public function authenticate(Request $request){
    //     $credentials = $request->validate([
    //         'email'=> ['required','email'],
    //         'password' => ['required']
    //     ]);
    
    //     if (Auth::attempt(($credentials))){
    //         $request->session()->regenerate();
    //         return redirect()->intended('users');
    //     }
    // return back()->withErrors(['email'=> 'メールアドレスが一致しません。']);
    // }
    // //ログアウト
    // public function logout(Request $request){
    //     Auth::logout();
    //     $request-> session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}
