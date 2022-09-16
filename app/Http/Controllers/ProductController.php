<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;

        $products = Product::where('store_type_id', $request->store_type_id)
        ->where('genre_id', $request->genre_id)
        ->get();

        return view('product.index', compact('store_type_id', 'genre_id', 'products'));
    }

    public function finishadd(Request $request) {
        $product_id = $request->product_id;


        return view('product.finishadd', compact('product_alls'));
    }
    
}