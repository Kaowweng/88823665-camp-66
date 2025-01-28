<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    function index(){
        return view("register");
    }
    
}