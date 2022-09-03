<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;

class StoretypeManagementController extends Controller
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

}
