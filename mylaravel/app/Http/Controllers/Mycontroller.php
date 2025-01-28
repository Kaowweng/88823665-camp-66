<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    function myfunction(Request $req, $var1=""){
        $data['value_id'] = $var1;
    $data['myinput'] = $req->input('myinput');
        return view('myview', $data);

    }
}