<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    function index(){
        return view('register');
    }
    function create(Request $req){
            $obj_users = new User;
            $obj_users->name = $req->input('name');
            $obj_users->email = $req->email;
            $obj_users->password = $req->password;
            $obj_users->save();
            return redirect('user');
    }
}