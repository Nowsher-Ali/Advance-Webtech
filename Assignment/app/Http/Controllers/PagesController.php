<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        //echo var_dump($products);
        return view('home.index')
        ->with('products',$products);
    }

    public function ViewCart(){
        if(session()->get('email')!=null)
        {
            $json = session()->get('cart');
            if($json!=null)
            {
                $arr = json_decode($json, true);
                //echo var_dump($arr);
                $a = [];
                echo count($arr);
                foreach($arr as $p)
                {
                    $x = (int)$p[0];
                    echo $x;
                    $p=Product::find($x);  
                    array_push($a,$p);
                }
                //echo var_dump($a);
                return view('customer.cart')
                ->with('products',$a);
            }
            else
            {
                echo "hello";
            }
        }
        else
        {
            return view('customer.login');
        }
    }

    public function AddToCart($id){
        if(session()->get('cart')==null)
        { 
            $arr = [];
            array_push($arr,$id);
            $json = json_encode($arr);
            session()->put('cart', $json);
        }
        else
        {
            $json = session()->get('cart');
            $arr = json_decode($json);
            array_push($arr,$id);
            $json_arr = json_encode($arr);
            session()->put('cart', $json_arr);
        }
         return redirect('/');
    }
}
