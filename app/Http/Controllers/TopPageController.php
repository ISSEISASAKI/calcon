<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;
use App\Product;
use App\CalorieManagement;
use Carbon\Carbon;


class TopPageController extends Controller
{
    public function index() {
        $store_types = StoreType::all();

        $calorie_managements = CalorieManagement::all();
                        
        foreach ($calorie_managements as $item) {
            $date = date_create($item->date);
            $date = date_format($date , 'Y-m-d');
            $item->date = $date;  
        }

        foreach ($calorie_managements as $calorie_management=>$product_id) {
    
            $product_calories = Product::find($product_id);

            $product_calories = Product::all();

        //if ($date == now()) {

            $totals = Product::selectRaw('SUM(calorie) as total_calorie')
            ->get();

        //} else {
          //  $totals = $product_id;
       // }
            
        }


            
        return view('toppage.index', compact('store_types', 'calorie_managements', 'product_calories', 'totals'));
    }
    
    public function ranking() {
        return view('toppage.ranking');
    }
    public function calorie() {
        return view('toppage.calorie');
    }
}
