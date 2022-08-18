<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * @param App\Http\Kernel
 */
//ログイン前 guest
Route::group(['middleware'=>['guest']],function(){
    //ログイン管理画面
    Route::get('/',[UserController::class,'showLogin'])->name('showLogin');
    //ログイン認証
    Route::post('/login',[UserController::class,'login'])->name('login');
    //管理者登録画面
    Route::get('/show/register',[UserController::class,'showRegister'])->name('showRegister');
    //管理者認証
    Route::post('/register',[UserController::class,'register'])->name('register');

});

//ログイン後 auth karnel.php参照
Route::group(['middleware'=>['auth']],function(){
    //ホーム画面
    Route::get('/home',[UserController::class,'home'])->name('home');
    //ログアウト
    Route::post('/logout',[UserController::class,'logout'])->name('logout');
// //会員登録一覧
    Route::get('/users',[UserController::class,'users'])->name('users');
    //新規会員作成
    Route::get('/show/user',[UserController::class,'showUser'])->name('showUser');
    //登録処理
    Route::post('/user',[UserController::class,'user'])->name('user');
    //会員編集
    Route::get('/show/edit/{user_id?}',[UserController::class,'showEdit'])->name('showEdit');
     //再登録処理
     Route::post('/user/edit',[UserController::class,'editUser'])->name('editUser');
    


});
