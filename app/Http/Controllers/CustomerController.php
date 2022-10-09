<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
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
            $customers = Customer::where('store_id', auth()->user()['store_id'])->orderBy('id', 'desc')->paginate(30);
        }

        return view('customers.index', compact('customers'));
    }

    public function show(Customer $customer){
        return view('customers.show', compact('customer'));
    }

    public function create(){
        return view('customers.create');
    }

    public function store(CustomerRequest $request){
        Customer::create([
            'name' => $request->name,
            'post_code' => $request->post_code,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'phone' => $request->phone,
            'store_id' => $request->store_id
        ]);

        return redirect('/customers')->with('flash', '新規顧客を登録しました。');
    }
}
