<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    // All Products
    function index(){
        $data = product::all();
        return view ('product',['products'=>$data]);
    }
    // Product Detail
    function detail($id){
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }
    // Search
    function search(Request $req){
        $data= Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    // Add to cart
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    // Count CAN BE STATIC FUNCTION
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
