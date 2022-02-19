<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function Login(){
        return view('customer.login');
    }

    public function auth(Request $request){
        //$request->session()->put('key', 'value');
        $customer = Customer::where('email','=',$request->email)
        ->where('password','=',$request->password)
        ->get()
        ->first();

        if($customer!=null)
        {
            $request->session()->put('email', $customer->email);
            return redirect('/');
        }
        else
        {
            return view('customer.login');
        }
    }

    public function Logout(){
        session()->forget('email');
        return view('customer.login');
    }

    public function Register(){
        return view('customer.register');
    }

    public function RegisterConfirm(Request $request){
        $c = new Customer;  
        $c->fullname = $request->get('fname');
        $c->email = $request->get('email'); 
        $c->password = $request->get('password'); 
        $c->save();  
        return redirect('/');
    }
    
}
