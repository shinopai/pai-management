<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;

class LogController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function store(Request $request, User $user){
        $this->validate($request, [
            'log' => 'required|max:300'
        ]);

        $user->logs()->create([
            'log' => $request->log,
            'customer_id' => $request->customer_id
        ]);

        return back()->with('flash', '新規ログを投稿しました');
    }
}
