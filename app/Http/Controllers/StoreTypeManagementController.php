<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;

class StoreTypeManagementController extends Controller
{
    public function add(){
        return view('storetype_management.add');
    }

    public function store(Request $request)
    {
 
          $post = new StoreType();
          $post->name = $request->name;
          $post->img_filename = "テスト";
          $post->admin_id = 1;
          $post->save();
  
          return view('storetype_management.finishadd');
    }

    public function finishadd(){
        return view('storetype_management.finishadd');
    }

    public function edit(Request $request){
        $store_type_id = $request -> store_type_id;

        return view('storetype_management.edit', compact('store_type_id'));
    }

    public function update(Request $request){
        $store_type_id = $request -> store_type_id;
        //$store_type_id = stdClass();   

        
        $store_type_managements = StoreType::find($store_type_id);
        $store_type_managements->name = $request->name;
        $store_type_managements->save();

        $store_type_managements = StoreType::all();        


        return view('dashboard.index', compact('store_type_managements'));
    }



}
