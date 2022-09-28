<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\CustomerController;

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

require __DIR__.'/auth.php';
