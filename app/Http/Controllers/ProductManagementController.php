<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductManagementController extends Controller
{
    public function index(Request $request){
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;

        $product_managements = Product::all();
  
            return view('product_management.index', compact('store_type_id', 'genre_id', 'product_managements'));
    }


    public function store(Request $request)
    {
 
          $post = new Product();
          $post->name = $request->name;
          $post->price = $request->price;
          $post->calorie = $request->calorie;
          $post->store_type_id = $request->store_type_id;
          $post->genre_id = $request->genre_id;
          $post->admin_id = 1;
          $post->img_filename = $request->img_filename;
          $post->save();
  
          return view('product_management.finishadd');
    }

    public function finishadd(){
        return view('product_management.finishadd');
    }

    public function edit(Request $request){
        $store_type_id = $request -> store_type_id;
        $genre_id = $request->genre_id;
        $product_name = $request->product_name;

        return view('product_management.edit', compact('store_type_id', 'genre_id','product_name'));
    }

    public function update(Request $request){
        $store_type_id = $request -> store_type_id;
        $genre_id = $request->genre_id; 
        $product_name = $request->product_name;


        
        $product_managements = Product::find($store_type_id);
        $genre_managements->name = $request->name;
        $genre_managements->save();

        $genre_managements = Product::all();        


        return view('product_management.index', compact('product_managements', 'store_type_id', 'genre_id', 'product_name'));
    }

    public function destroy(Request $request){
        $store_type_id = $request -> store_type_id;
        $genre_id = $request->genre_id;
        $product_name = $request->product_name;



        $product_managements = Product::find([$store_type_id, $genre_id, $product_name]);
    
        $product_managements->delete();

        $product_managements = Product::all();
 
        return view('product_management.index', compact('product_managements', 'store_type_id', 'genre_id', 'produc_name'));
    }
    
    
}