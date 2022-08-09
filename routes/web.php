<?php

use App\Http\Controllers\AccountMasterController;
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

//管理者ログイン画面
Route::get('/',[AccountMasterController::class,'user'])->name('index');
//会員一覧画面
Route::get('/users',[AccountMasterController::class,'users'])->name('users');
//新規会員作成(編集)
Route::get('/users',[AccountMasterController::class,'user'])->name('user');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
