<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CalorieManagement;

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
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;

        foreach ($product_id as $id) {
    
            $post = new CalorieManagement();
            $post->product_id = $id;
            $post->date = now();
            $post->user_id = 1;
            $post->save();
    
        }
    
        $products = Product::find($product_id);


        return view('product.finishadd', compact('store_type_id', 'genre_id', 'products'));
    }
    
}