<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ProductList;
use Illuminate\Http\Request;
use App\Models\User;
class ProductController extends Controller
{
    function index(){
        $category = Categories::all();
        $product = ProductList::all();
        $Users = User::all();
        return view('/product',['user'=>$Users,'categorys'=>$category,'products'=>$product]);
    }
    function store(Request $req){
        $stock = new Categories();
        $stock ->name = $req->category;
        $stock ->save();
        foreach($req->product_name as $value){
            $suppile = new ProductList();
            $suppile->name = $value;
            $suppile->category_id = $stock->id;
            $suppile->user_id = session()->get('user')->id;
            $suppile->save();
        }  
        return redirect("/product");
    }
}