<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
class logincontroller extends Controller
{
    function index(){
        return view("login");
        }
    function login(Request $req){
      $user =  User::where('email',$req->email)->first();
       if( $user && $req->password && Hash::check($req->password,$user -> password)){
        session()->forget('error');
        session(['user' =>$user]);
        return redirect("/user");
       }
       else{
        session(['error'=>'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง']);
        return view("/login",['email'=>$req->email]);
       }
        // return redirect("/");
    }
}