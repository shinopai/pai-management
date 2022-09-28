<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        if (auth()->user()->isSuperVisor()) {
            $customers = Customer::orderBy('id', 'desc')->paginate(30);
        } else {
            $customers = Customer::where('store_id', auth()->user()['store_id'])->paginate(30);
        }

        return view('customers.index', compact('customers'));
    }
}
