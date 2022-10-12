<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\StoreType;

class GenreController extends Controller
{
    public function index(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genres = Genre::all();
        $stores = [];
        $stores[] = StoreType::find($store_type_id);

        foreach ($stores as $store){
            $store_name = $store['name'];
        }

        return view('genre.index', compact('store_type_id', 'genres', 'store_name'));
    }
    
}
