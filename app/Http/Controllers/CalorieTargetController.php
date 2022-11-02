<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieTarget;
use Illuminate\Support\Facades\Auth;

class CalorieTargetController extends Controller
{
    public function index() {
        $calorie_targets = CalorieTarget::all();

        foreach($calorie_targets as $calorietarget){
            $calorie_check = $calorietarget['user_id'];
        }

        return view('mypage.calorie_target.index', compact('calorie_targets', 'calorie_check'));
    }

    public function store(Request $request) {
        $user_id = Auth::user();

        $request->validate([
            'calorie' => 'required',
        ],
        [
            'calorie.required' => 'カロリー数値は必須項目です。',
        ]);

        $post = new CalorieTarget();
        $post->calorie = $request->calorie;
        $post->user_id = $user_id;
        $post->save();

        $post = CalorieTarget::all();   
          
        return view('mypage.calorie_target.finishadd', compact('post'));
    }

    public function update(Request $request) {
        $user_id = Auth::user(); 

        $request->validate([
            'calorie' => 'required',
        ],
        [
            'calorie.required' => 'カロリー数値は必須項目です。',
        ]);
        
        $post = CalorieTarget::where('user_id', $user_id)
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
