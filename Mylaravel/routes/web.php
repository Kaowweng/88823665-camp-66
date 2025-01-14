<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mylaravel',[MyController::class,'myfunction']);
Route::post('/mylaravel',[MyController::class,'myfunction']);