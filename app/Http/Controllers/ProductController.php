<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

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
    // Order Now
    function orderNow(){
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    // Order Place
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect ('/');
    }
    // My order
    function myOrder(){
        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)->get();
        return view('myorder',['orders'=>$orders]);
    }
}
