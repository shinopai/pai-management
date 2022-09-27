<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TitleController;

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

require __DIR__.'/auth.php';
