<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\StoreType;
use Illuminate\Support\Facades\Auth;

class GenreManagementController extends Controller
{
    public function index(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genre_managements = Genre::all();
        $stores = [];
        $stores[] = StoreType::find($store_type_id);

        foreach ($stores as $store){
            $store_name = $store['name'];
        }
 
        return view('genre_management.index', compact('store_type_id', 'genre_managements', 'store_name'));
    }

    //コンビニ名追加画面
    public function add(Request $request) {
        $store_type_id = $request -> store_type_id;
        return view('genre_management.add', compact('store_type_id'));
    }

    //コンビニ名追加処理
    public function store(Request $request) {
        $admin_is = 1;
        $store_type_id = $request -> store_type_id;

        $post = new Genre();
        $post->name = $request->name;
        $post->admin_id = $admin_id;
        $post->save();
  
          
        return view('genre_management.finishadd', compact('store_type_id'));
    }

    //コンビニ名追加確認画面
    public function finishadd(Request $request) {
        $store_type_id = $request -> store_type_id;

        return view('genre_management.finishadd', compact('store_type_id'));
    }

    //ジャンル名編集
    public function edit(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genre_id = $request -> id;

        return view('genre_management.edit', compact('store_type_id', 'genre_id'));
    }

    public function finishedit(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genre_id = $request -> id;

        return view('genre_management.finishedit', compact('store_type_id', 'genre_id'));
    }

    //ジャンル名編集処理
    public function update(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genre_id = $request -> id;
      
        $genre_managements = Genre::find($genre_id);
        $genre_managements->name = $request->name;
        $genre_managements->save();

        $genre_managements = Genre::all();        


        return view('genre_management.finishedit', compact('genre_managements', 'store_type_id', 'genre_id'));
    }

    public function destroy(Request $request) {
        $store_type_id = $request -> store_type_id;
        $genre_id = $request -> id;

        $genre_managements = Genre::find($genre_id);
        $genre_managements->delete();

        $genre_managements = Genre::all();
 
        return view('genre_management.index', compact('genre_managements', 'store_type_id', 'genre_id'));
    }
    
}
