<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\EditMemberRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    public function showLogin(){
    
        // dd($members);
        return view('login_form');

    }
    
    public function login(LoginRequest $request ){
        $credentials = $request->only('email','password');
    
        if (Auth::attempt(($credentials))){
            $request->session()->regenerate();
            //認証成功時にセッションを返す 二回以上のリダイレクト回避
            return redirect()->route('home');
            // ->with('login_success','ログインが成功しました');
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
     }
     //ログアウト
     public function logout(Request $request)
     {
        Auth::logout();
         //セッション削除
        $request->session()->invalidate();
         //再生成
        $request->session()->regenerateToken();
         //連打による二回以上送信の回避
         
         return redirect()->route('showLogin')->with('logout','ログアウトしました。');
     }
        //ホーム
     public function home(){
        return view('home');
    }
        // 会員一覧画面
    public function users(){
        $members = DB::table('users')->get();
        // dd($members);

    return view('users',["members"=> $members]);
    }
   
    //会員登録
    public function showUser(){
        return view('user_form');
    }

    //会員登録処理
    public function user(MemberRequest $request){
        $attributes = $request ->all();
        // dd($attributes);
        $member = new User;
        $member -> fill($attributes) -> save();
        return redirect()->route('users')->with('member_success','登録完了しました');
    }

    //会員編集画面
    public function showEdit($user_id){
        // dd($user_id);
        $editMember = User::where('user_id',$user_id)->first();
        // dd($editMember);
        return view('user_edit_form',['editMember'=> $editMember]);
    }
        //会員登録処理(編集)
        public function editUser(EditMemberRequest $request){
            $attributes = $request ->all();
            // dd($attributes);
            $member = new User;
            $member -> fill($attributes) -> save();
            return redirect()->route('users')->with('member_success','再登録完了しました');
        }
    }






