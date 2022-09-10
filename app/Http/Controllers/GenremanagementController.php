<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreManagementController extends Controller
{
    public function index(Request $request){
        $store_type_id = $request -> store_type_id;
        $genre_managements = Genre::all();
 
        return view('genre_management.index', compact('store_type_id', 'genre_managements'));
    }

    public function add(){
        return view('genre_management.add');
    }

    public function store(Request $request)
    {
 
          $post = new Genre();
          $post->name = $request->name;
          $post->admin_id = 1;
          $post->save();
  
          return view('genre_management.finishadd');
    }

    public function finishadd(){
        return view('genre_management.finishadd');
    }

    public function edit(Request $request){
        $store_type_id = $request -> store_type_id;

        return view('genre_management.edit', compact('store_type_id'));
    }

    public function update(Request $request){
        $store_type_id = $request -> store_type_id;
        //$store_type_id = stdClass();   

        
        $genre_managements = Genre::find($store_type_id);
        $genre_managements->name = $request->name;
        $genre_managements->save();

        $genre_managements = Genre::all();        


        return view('genre_management.index', compact('genre_managements', 'store_type_id'));
    }

    public function destroy(Request $request){
        $store_type_id = $request -> store_type_id;
        $genre_managements = Genre::find($store_type_id);
    
        $genre_managements->delete();

        $genre_managements = Genre::all();
 
        return view('genre_management.index', compact('genre_managements', 'store_type_id'));
    }
    
}
