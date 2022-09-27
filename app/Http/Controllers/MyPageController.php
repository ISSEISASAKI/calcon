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
            //->where('date', date('Y-m-d'))
            ->get();

        $products = [];
        foreach ($calorie_managements as $calorie_management) {
    
            $products[] = Product::find($calorie_management['product_id']);

        }
        
        return view('mypage.purchase_history.index', compact('store_types', 'products'));
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


        $products = [];
        $calorie_dates = [];
        foreach ($calorie_managements as $calorie_management) {
    
            $products[] = Product::find($calorie_management['product_id']);
            $calorie_dates[] = $calorie_management['date'];

        }



        return view('mypage.purchase_history.store_type', compact('store_name', 'products', 'calorie_dates'));
    }

    
}
