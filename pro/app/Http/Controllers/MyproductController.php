<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myproduct;
use App\Models\cart;
use App\Models\order;

use Illuminate\Support\Facades\DB;
use Session;

class MyproductController extends Controller
{
    public function iindex($id){
        $data=myproduct::find($id);
        return view('details',['product'=>$data]);   
    }

    public function index(){
        $data = DB::table('myproducts')->get();
        $users = json_decode($data, true);
        //return $users;
        return  view('product',['products'=>$users]);
    }

    public function addtocart(Request $req)
    {
        // $dd=$req->Session()->get('user');
            if($req->Session()->has('user')){
            $cart=new cart;
            $cart->user_id=$req->Session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            // $CC=cart::all();
               // return "save";
            return redirect('/');

        }else{
           return redirect('/login');
            // return view('login');
        }
        
    }

    public static function addcart(){
        $userId=Session()->get('user')['id'];
        return cart::where('user_id',$userId)->count();

        //  $rr=cart::where('user_id',$userId)->count():

        }

    public function cartlist(){
        $userid=Session::get('user')['id'];

        $products=DB::table('cart')
            ->join('myproducts','cart.product_id','=','myproducts.id')
            ->where('cart.user_id',$userid)
            ->select('myproducts.*','cart.id as cart_id')
            ->get();
        return view('cardList',['products'=>$products]);
    }
    public function removeitem($id)
    {
        cart::Destroy($id);
        return redirect('/cartlist');
    }

    public function ordernow(){
          $userid=Session::get('user')['id'];
          
        $total=DB::table('cart')
            ->join('myproducts','cart.product_id','=','myproducts.id')
            ->where('cart.user_id',$userid)            
            ->sum('myproducts.price');
            // return  $userid;
            //  return "h";
          return view('ordernow',['total'=>$total]);
    }

    public function orderplace(Request $req){
            $userId=Session::get('user')['id'];
            $allcart=cart::where('user_id',$userId)->get();

            foreach ($allcart as $cart) {
                $order=new order;

                $order->product_id=$cart['product_id'];
                $order->user_id=$cart['user_id'];
                $order->status='pending';
                $order->Payment_method=$req->payment;
                $order->payment_status='pending';
                $order->address=$req->address;

                $order->save();

                cart::where('user_id',$userId)->delete();
            }
            
            
            return redirect('/');
    }

    public function myorder(){
        $userid=Session::get('user')['id'];
          
        $orders=DB::table('order')
            ->join('myproducts','order.product_id','=','myproducts.id')
            ->where('order.user_id',$userid)            
            ->get();
            // return  $userid;
            //  return "h";
          return view('myorder',['orders'=>$orders]);
    }
}
