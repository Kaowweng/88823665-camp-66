<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Happy very much!</h1>";
});

Route::get("/mylaravel/{id?}", 
[MyController::class,'myfunction']);

Route::post("/mylaravel/{id?}", 
[MyController::class,'myfunction']);


Route::get("/home", 
[homecontroller::class,'index']);

Route::post("/home", 
[homecontroller::class,'index']);

Route::get("/", 
[homecontroller::class,'index']);

Route::post("/", 
[homecontroller::class,'index']);

Route::get("/login", 
[logincontroller::class,'index']);

Route::post("/login", 
[logincontroller::class,'index']);

Route::get("/register", 
[registercontroller::class,'index']);

Route::post("/register", 
[registercontroller::class,'index']);