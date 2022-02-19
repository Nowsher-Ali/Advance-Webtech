<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function AddProduct(){
        return view('product.add');
    }

    public function ConfirmAdd(Request $request){
        $p = new Product;  
        $p->name = $request->get('pname');
        $p->price = $request->get('price'); 
        $p->save();  
        return redirect('/');
    }

    public function DeleteProduct($id){
        $p=Product::find($id);  
        $p->delete();  
        return redirect('/');
    }

    public function EditProduct($id){
        $p=Product::find($id);   
        return view('product.edit')
        ->with('p',$p);
    }

    public function ConfirmEdit($id, Request $request){
        $p=Product::find($id);  
        $p->name = $request->get('pname');
        $p->price = $request->get('price'); 
        $p->save();  
        return redirect('/');
    }
}
