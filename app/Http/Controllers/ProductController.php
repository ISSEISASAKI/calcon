<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $products = Product::all();

        return view('product.index', compact('store_type_id', 'genre_id', 'products'));
    }
    
}