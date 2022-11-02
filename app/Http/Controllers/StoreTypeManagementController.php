<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;
use App\Product;
use Illuminate\Support\Facades\Auth;

class StoreTypeManagementController extends Controller
{
    public function add() {
        return view('storetype_management.add');
    }

    //コンビニ名追加処理
    public function store(Request $request) {
        $admin_id = Auth::user();

        $request->validate([
            'name' => 'required',
            'img_filename' => 'required',
        ],
        [
            'name.required' => '名前は必須項目です。',
            'img_filename.required'  => '画像は必須項目です。',
        ]);

        // 画像フォームでリクエストした画像を取得
        $img = $request->img_filename;
        // storage > public > img配下に画像が保存される
        $path = $img->store('img','public');

        $post = new StoreType();
        $post->name = $request->name;
        $post->img_filename = $path;
        $post->admin_id = $admin_id;
        $post->save();
  
        return view('storetype_management.finishadd');
    }

    //コンビニ名追加完了画面
    public function finishadd() {
        return view('storetype_management.finishadd');
    }

    public function edit(Request $request) {
        $store_type_id = $request -> store_type_id;

        $store_type_managements = StoreType::find($store_type_id);
        $store_type_name = $store_type_managements['name'];

        return view('storetype_management.edit', compact('store_type_id', 'store_type_name'));
    }

    //コンビニ名編集処理
    public function update(Request $request) {
        $store_type_id = $request -> store_type_id; 

        $request->validate([
            'name' => 'required',
            'img_filename' => 'required',
        ],
        [
            'name.required' => 'コンビニ名は必須項目です。',
            'img_filename.required'  => '画像は必須項目です。',
        ]);

        // 画像フォームでリクエストした画像を取得
        $img = $request->img_filename;
        // storage > public > img配下に画像が保存される
        $path = $img->store('img','public');

        $store_type_managements = StoreType::find($store_type_id);
        $store_type_managements->name = $request->name;
        $store_type_managements->img_filename = $path;
        $store_type_managements->save();

        $store_type_managements = StoreType::all();        

        return view('dashboard.index', compact('store_type_managements'));
    }

    //コンビニ名削除処理
    public function destroy(Request $request) {
        $store_type_id = $request -> store_type_id;
    
        $product_managements = Product::where('store_type_id', $request->store_type_id);
        $product_managements->delete();
    
        $store_type_managements = StoreType::find($store_type_id);
        $store_type_managements->delete(); 
           
        $store_type_managements = StoreType::all();
     
        return view('dashboard.index', compact('store_type_managements'));
    }
}
