<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcomePage(){
        $allProducts = Product::all();
        // dd($allProducts);
        return view ('welcome' , [
            "products" => $allProducts,
        ]);
    }
    public function indexPage(){
        return view('index');
    }
}
