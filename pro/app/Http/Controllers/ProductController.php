<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $data = DB::table('product')->get();
        $users = json_decode($data, true);
        //return $users;
        return  view('product',['products'=>$users]);
    }

    public function details($id){
        $onedata=Product::find($id);
        
        return "hi";
        // return $onedata;
    }
}
