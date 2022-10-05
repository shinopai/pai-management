<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LogController;

// ルート
Route::get('/', function () {
    return view('home.index');
});

// ログイン後の遷移画面
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// 社員一覧画面
Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('users.index');

// 役職一覧画面
Route::get('/titles', [TitleController::class, 'index'])->middleware('auth')->name('titles.index');

// 顧客関連ルーティング
Route::resource('customers', CustomerController::class);

// 顧客ログ作成
Route::resource('users.logs', LogController::class)->only(['store', 'destroy'])->middleware('auth');

require __DIR__.'/auth.php';
