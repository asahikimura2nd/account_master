<?php

use App\Http\Controllers\AccountMasterController;
use App\Http\Controllers\LoginController;
use App\Models\AccountMaster;
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
    Route::get('/',[LoginController::class,'showLogin'])->name('showLogin');
    //ログイン認証
    Route::post('/login',[LoginController::class,'login'])->name('login');
});

//ログイン後 auth karnel.php参照
Route::group(['middleware'=>['auth']],function(){
    //ホーム画面
    Route::get('/home',[AccountMasterController::class,'home'])->name('home');
    //ログアウト 認証後の処理のため
    Route::post('/logout',[AccountMasterController::class,'logout'])->name('logout');
});
// //会員一覧画面
// Route::get('/users',[AccountMasterController::class,'users'])->name('users');
// //新規会員作成(編集)
// Route::get('/users',[AccountMasterController::class,'user'])->name('user');
// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
