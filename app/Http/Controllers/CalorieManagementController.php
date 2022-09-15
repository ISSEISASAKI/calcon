<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieManagement;
use App\CalorieTarget;


class CalorieManagementController extends Controller
{
    public function index() {
        //$calorie_managements = CalorieManagement::all(); 
        $calorie_targets = CalorieTarget::all(); 
  
        return view('toppage.calorie_management.index', compact('calorie_targets'));
    }

    public function add(Request $request) {
        $calorie = $request->calorie;
  
        return view('toppage.calorie_management.index', compact('calorie'));
    }
}
