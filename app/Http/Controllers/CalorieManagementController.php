<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieManagement;
use App\CalorieTarget;
use App\Product;


class CalorieManagementController extends Controller
{
    public function index() {
        $user_id = 1;
        $today_calorie = 0;
        $today_price =0;
        $calorie_targets = CalorieTarget::where('user_id', $user_id)
                                ->first();
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
                                //->where('date', date('Y-m-d'))
                                ->get();

        $products = [];
        foreach ($calorie_managements as $calorie_management) {
    
            $products[] = Product::find($calorie_management['product_id']);

        }

        foreach ($products as $product) {
    
            $today_price += $product['price'];

        } 

        

        foreach ($products as $product) {
    
            $today_calorie += $product['calorie'];

        } 
  
        return view('toppage.calorie_management.index', compact('calorie_targets', 'today_calorie', 'today_price'));
    }

    public function add(Request $request) {
        $calorie = $request->calorie;
  
        return view('toppage.calorie_management.index', compact('calorie'));
    }
}
