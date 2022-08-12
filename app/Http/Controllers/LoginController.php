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
        $credentials = $request->only('email','password');
    
        if (Auth::attempt(($credentials))){
            $request->session()->regenerate();
            //認証成功時にセッションを返す 二回以上のリダイレクト回避
            return redirect()->route('home')->with('login_success','ログインが成功しました');
        }
            //認証失敗　エラーの内容をセッションと一緒に返せる
            return back()->withErrors(['login_error'=> 'メールアドレスかパスワード一致しません。']);
     }
        
    }
