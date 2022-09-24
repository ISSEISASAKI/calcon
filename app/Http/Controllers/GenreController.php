<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\StorType;

class GenreController extends Controller
{
    public function index(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genres = Genre::all();

        return view('genre.index', compact('store_type_id', 'genres'));
    }
    
}
