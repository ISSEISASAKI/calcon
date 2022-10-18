<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieManagement;
use App\CalorieTarget;
use App\Product;
use Illuminate\Support\Facades\Auth;


class CalorieManagementController extends Controller
{
    public function index() {
        $user_id = Auth::user();
        $today_calorie = 0;
        $today_price =0;
        $calorie_targets = CalorieTarget::all();
        $calorie = CalorieTarget::where('user_id', $user_id)
                                ->first();
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
                                ->where('date', date('Y-m-d'))
                                ->get();

        foreach ($calorie_targets as $calorie_target) {
            $calorie_check = $calorie_target['user_id'];
        }

        if($calorie_check == Auth::user()){

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

        $remaining = $calorie['calorie'] - $today_calorie; 

        return view('mypage.calorie_management.index', compact('calorie_targets', 'today_calorie', 'today_price', 'remaining', 'calorie_check', 'calorie'));

        }

        return view('toppage.calorie_management.index', compact('calorie_targets', 'today_calorie', 'today_price', 'calorie_check'));
        
    }
}
