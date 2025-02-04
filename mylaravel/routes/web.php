<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);
Route::post('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);

Route::get('/user',  [UserController::class,'index']);

Route::get('/register',  [RegisterController::class,'index']);
Route::post('/register',  [RegisterController::class,'create']);

Route::get('/login',  [LoginController::class,'index']);
Route::post('/login',  [LoginController::class,'index']);


Route::get('/user/{id}',  [UserController::class,'edit']);
Route::put('/user' ,[UserController::class, 'edit_user']);
Route::delete('/user',[UserController::class, 'delete']);

Route::get( '/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'index']);
Route::get( '/home', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'index']);