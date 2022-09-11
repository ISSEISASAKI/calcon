<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Product;

class ProductManagementController extends Controller
{
    public function index(Request $request){
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;


        $product_managements = Product::all();

        $product = Product::where('store_type_id', $request)
                   ->where('genre_id', $request)
                   ->get();
  
        return view('product_management.index', compact('store_type_id', 'genre_id', 'product_managements', 'product'));
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
        $product_id = $request->product_id;

        return view('product_management.edit', compact('product_id'));
    }

    public function update(Request $request){
        $product_id = $request->product_id;

        
        $product_managements = Product::find($product_id);
        $product_managements->name = $request->name;
        $product_managements->save();

        $product_managements = Product::all();        


        return view('product_management.index', compact('product_managements', 'product_id'));
    }

    public function destroy(Request $request){
        $product_id = $request->product_id;


        foreach ($product_id as $id) {
    
        $product_managements = Product::find($id);
        $product_managements->delete();

        }

        $product_managements = Product::all();

        return view('dashboard.index', compact('product_managements'));
    }
    
    
}