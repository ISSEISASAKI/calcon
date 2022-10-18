<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CalorieManagement;
use App\Genre;
use App\StoreType;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;

        $stores = [];
        $stores[] = StoreType::find($store_type_id);

        foreach ($stores as $store){
            $store_name = $store['name'];
        }

        $genres = [];
        $genres[] = Genre::find($genre_id);

        foreach ($genres as $genre){
            $genre_name = $genre['name'];
        }

        $products = Product::where('store_type_id', $request->store_type_id)
            ->where('genre_id', $request->genre_id)
            ->get();

        return view('product.index', compact('store_type_id', 'genre_id', 'products', 'store_name', 'genre_name'));
    }

    public function finishadd(Request $request) {
        $user_id = Auth::user();
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;

        foreach ($product_id as $id) {
    
            $post = new CalorieManagement();
            $post->product_id = $id;
            $post->date = date('Y-m-d');
            $post->store_type_id = $store_type_id;
            $post->user_id = $user_id;
            $post->save();
        }
    
        $products = Product::find($product_id);

        return view('product.finishadd', compact('store_type_id', 'genre_id', 'products'));
    }
}