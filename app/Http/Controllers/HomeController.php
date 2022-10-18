<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StoreType;
use App\Product;
use App\CalorieManagement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = 1;
        $today_calorie = 0;
        $store_types = StoreType::all();
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
            ->where('date', date('Y-m-d'))
            ->get();

        $products = [];
        foreach ($calorie_managements as $calorie_management) {
            $products[] = Product::find($calorie_management['product_id']);
        }

        foreach ($products as $product) {
            $today_calorie += $product['calorie'];
        }
        return view('toppage.index', compact('store_types', 'today_calorie'));
    }
}
