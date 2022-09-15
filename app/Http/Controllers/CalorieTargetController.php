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

    public function update(Request $request) {
        $user_id = $request->user_id;

        
        $post = CalorieTarget::find($user_id);
        $post->calorie = $request->calorie;
        $post->save();

        $post = CalorieTarget::all(); 
          return view('mypage.calorie_target.finishadd');
    }

    public function finishadd() {
        return view('mypage.calorie_target.finishadd');
    }
}
