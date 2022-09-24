<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Product;

class ProductManagementController extends Controller
{
    public function index(Request $request) {
        //URLのstore_type_idとgenre_id取得
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;

        //URLのstore_type_idとgenre_idをproductsテーブルから検索処理
        $product_managements = Product::where('store_type_id', $store_type_id)
                   ->where('genre_id', $genre_id)
                   ->get();
                
  
        return view('product_management.index', compact('store_type_id', 'genre_id', 'product_managements'));
        
    }

    //商品追加処理
    public function store(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        // 画像フォームでリクエストした画像を取得
        $img = $request->img_filename;
        // storage > public > img配下に画像が保存される
        $path = $img->store('img','public');


          //productsテーブルへ保存処理 
        $post = new Product();
        $post->name = $request->name;
        $post->price = $request->price;
        $post->calorie = $request->calorie;
        $post->store_type_id = $request->store_type_id;
        $post->genre_id = $request->genre_id;
        $post->admin_id = 1;
        $post->img_filename = $path;
        $post->save();
  
        return view('product_management.finishadd', compact('store_type_id', 'genre_id'));
    }

    //商品追加完了画面
    public function finishadd(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;

        return view('product_management.finishadd', compact('store_type_id', 'genre_id'));
    }

    //商品編集画面
    public function edit(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;

        $product_managements = Product::find($product_id);

        return view('product_management.edit', compact('store_type_id', 'genre_id', 'product_id', 'product_id', 'product_managements'));
    }

    //商品編集完了画面
    public function finishedit(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;
    
        return view('product_management.finishedit', compact('store_type_id', 'genre_id'));
    }

    //商品編集処理
    public function update(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;

        $img = $request->img_filename;
        // storage > public > img配下に画像が保存される
        $path = optional($img)->store('img','public');
        
        $product_managements = Product::find($product_id);
        $product_managements->name = $request->name;
        $product_managements->price = $request->price;
        $product_managements->calorie = $request->calorie;
        $product_managements->img_filename = $path;
        $product_managements->save();

        $product_managements = Product::all();
        
        $product_managements = Product::where('store_type_id', $request->store_type_id)
        ->where('genre_id', $request->genre_id)
        ->get();


        return redirect()->route('product_management.finishedit', compact('product_managements', 'store_type_id', 'genre_id'));
    }

    //商品削除処理
    public function destroy(Request $request) {
        $store_type_id = $request->store_type_id;
        $genre_id = $request->genre_id;
        $product_id = $request->product_id;

        // 商品画像ファイルへのパスを取得
        $path = $request->img_filename;
        
        // ファイルが登録されていれば削除
        if ($path !== '') {
            \Storage::disk('public')->delete($path);
        }

        //product_idで渡ったデータは複数なのでforeachで一つにする
        foreach ($product_id as $id) {
    
        $product_managements = Product::find($id);
        $product_managements->delete();

        }

        $product_managements = Product::all();

        return redirect()->route('product_management.index', compact('product_managements', 'store_type_id', 'genre_id'));
    }
    
    
}