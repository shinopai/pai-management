<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $titles = Title::orderBy('id', 'asc')->get();

        return view('titles.index', compact('titles'));
    }
}
