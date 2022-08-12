<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountMasterController extends Controller
{
    public function home(){
        return view('home');
    }

        /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
}
