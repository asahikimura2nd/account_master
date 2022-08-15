<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
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
            //認証失敗 エラーの内容をセッションと一緒に返せる
            return back()->withErrors(['login_error'=> 'メールアドレスかパスワード一致しません。']);
     }
     
     public function showRegister()
     {
        return view('register_form');
     }
     //登録画面
     public function register(UserRequest $request){
        // dd($request->all());
        $register = $request->all();
        $password = $register['password'];
        $confirmPassword = $register['confirmPassword'];

        if($password === $confirmPassword){
            //ハッシュ化
            $register['password'] = bcrypt($register['password']);
            $admin = new User;
            $admin->fill($register)->save();
            return redirect()->route('showLogin')->with('register_success','登録完了しました。');
        }
      
        return redirect();

        //保存処理

     }
     public function logout(LoginRequest $request)
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
