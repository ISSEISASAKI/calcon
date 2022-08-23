<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(Request $request){
        $store_type_id = $request -> store_type_id;
        //$genres = Genre:all();
            $genres = [
                [
                    'id' => 1,
                    'name' => 'おにぎり',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 2,
                    'name' => 'アイス', 
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '', 
                ],
                [
                    'id' => 3,
                    'name' => 'お弁当',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 4,
                    'name' => '飲み物',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 5,
                    'name' => 'スイーツ',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],

            ];
            return view('genre.index', compact('store_type_id', 'genres'));
    }
    
}
