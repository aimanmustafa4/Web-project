<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function(){
//     return view ('index');
// });

Route::get('/index' , [ProductController::class , "indexPage"])->name("index");
