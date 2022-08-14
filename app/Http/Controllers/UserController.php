<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;
// https://readouble.com/laravel/8.x/ja/authentication.html
// https://qiita.com/mpyw/items/c944d4fcbb45c1a3924c

use App\Models\User;

class UserController extends Controller
{
    public function showLogin(){
        return view('login_form');
    }
    
    public function login(UserRequest $request ){
        $credentials = $request->only('email','password');
    
        if (Auth::attempt(($credentials))){
            $request->session()->regenerate();
            //認証成功時にセッションを返す 二回以上のリダイレクト回避
            return redirect()->route('home')->with('login_success','ログインが成功しました');
        }
            //認証失敗 エラーの内容をセッションと一緒に返せる
            return back()->withErrors(['login_error'=> 'メールアドレスかパスワード一致しません。']);
     }
     
     public function showRegister()
     {
        return view('register_form');
     }

     public function Register(UserRequest $request){
        // dd($request->all());
        $register = $request->all();
        $password = $register['password'];
        $confirmPassword = $register['confirmPassword'];

        if($password === $confirmPassword){
            return redirect()->route('showLogin')->with('register_success','登録完了しました。');
        }
      
        return redirect();

     }
     public function logout(Request $request)
     {
         //ログアウト
        Auth::logout();
         //セッション削除
        $request->session()->invalidate();
         //再生成
        $request->session()->regenerateToken();
         //連打による二回以上送信の回避
         return redirect()->route('showLogin')->with('logout','ログアウトしました。');
     }

     public function home(){
        return view('home');
    }
    }
