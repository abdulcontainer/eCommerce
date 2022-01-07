<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

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
    // Cart List
    function cartList(){
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')->where('cart.user_id',$userId)->get();
        return view('cartlist',['products'=>$data]);
    }
    // Remove Cart
    function removeCart($id){
        echo Cart::destroy($id);
        return redirect('cart-list');
    }
}
