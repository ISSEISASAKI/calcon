<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        //$store_type_managements = Store_type_management:all();
            $store_type_managements = [
                [
                    'id' => 1,
                    'name' => 'セブンイレブン',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 2,
                    'name' => 'ファミリーマート',  
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 3,
                    'name' => 'ローソン',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 4,
                    'name' => 'デイリーヤマザキ',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 5,
                    'name' => 'ミニストップ',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],

            ];

            $name = $request -> new_store;
            
            return view('dashboard.index', compact('store_type_managements', 'name'));
    }

   //public function store(Request $request)
   //{
      //   $store = new Store();
      //  $store->name = $request->input('name');
      //   $store->save();
 
      //   return redirect()->route('dashboard.finishadd');
   //}

    public function add(){
        return view('dashboard.add');
    }

    public function finishadd(){
        return view('dashboard.finishadd');
    }

}
