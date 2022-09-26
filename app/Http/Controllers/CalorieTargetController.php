<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieTarget;

class CalorieTargetController extends Controller
{
    public function index() {
        $calorie_targets = CalorieTarget::all();

        return view('mypage.calorie_target.index', compact('calorie_targets'));
    }

    public function store(Request $request) {

        $post = new CalorieTarget();
        $post->calorie = $request->calorie;
        $post->user_id = 1;
        $post->save();

        $post = CalorieTarget::all();   
          
        return view('mypage.calorie_target.finishadd', compact('post'));
    }

    public function update(Request $request) {
        $user = 1; 
        
        $post = CalorieTarget::where('user_id', $user)
        ->first();
        $post->calorie = $request->calorie;
        $post->save();

        $post = CalorieTarget::all(); 
        return view('mypage.calorie_target.finishadd', compact('post'));
    }

    public function finishadd() {
        return view('mypage.calorie_target.finishadd');
    }
}
