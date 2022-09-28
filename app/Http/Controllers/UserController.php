<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        $this->authorize('viewAny', $user);
        $users = User::orderBy('id', 'desc')->paginate(50);

        return view('users.index', compact('users'));
    }
}
