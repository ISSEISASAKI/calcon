<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieManagement;
use App\StoreType;
use App\Product;

class MyPageController extends Controller
{
    public function index() {
        return view('mypage.index');
    }

    public function logout() {
        return view('mypage.logout');
    }
    public function editmember() {
        return view('mypage.editmember');
    }

    public function history() {
        $user_id = 1;
        $store_types = StoreType::all();
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
            ->where('date', date('Y-m-d'))
            ->get();
        
        if ($calorie_managements->isEmpty()) {
            return view('mypage.purchase_history.index', compact('calorie_managements', 'store_types'));
        } else {

        $prpducts = [];
        foreach ($calorie_managements as $calorie_management) {
    
            $products[] = Product::find($calorie_management['product_id']);

        }

 
        $store_names = [];
        foreach ($products as $product) {
    
            $store_names[] = StoreType::find($product['store_type_id']);

        }
        
        return view('mypage.purchase_history.index', compact('store_types', 'products', 'store_names', 'calorie_managements'));
        }
    }

    //購入履歴
    public function store_type(Request $request) {
        $user_id = 1;
        $store_type_id = $request->store_type_id;

        $store_types = StoreType::where('id', $store_type_id)
        ->get();

        foreach ($store_types as $store_type) {

        $store_name = $store_type['name'];
    
        }
        
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
        ->get();

        //$prpducts = [];
        foreach ($calorie_managements as $calorie_management) {
    
            $products = Product::where('id', $calorie_management['product_id'])
                ->where('store_type_id', $store_type_id)
                ->get();
        }

        return view('mypage.purchase_history.store_type', compact('store_name', 'products'));
    }

    
}
