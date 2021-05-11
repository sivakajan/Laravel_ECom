<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){
        // $data= User::get();
         $data= User::where(['email'=>$req->email])->first();
         if(!$data ||!Hash::check($req->password, $data->password))
         {  
       
            return redirect('login');
         }
      
        else{
            
            $req->session()->put('user',$data);
            return redirect('/');
        }
}

    public function regester(Request $req){
        $user=new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);

        $user->save();

        return redirect('/login');
    }

    public function de(){
        $role=true;
        return view('de',['rr'=>$role]);
    }
}