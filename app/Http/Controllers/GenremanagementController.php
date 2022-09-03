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
    
}
