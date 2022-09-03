<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieTarget;

class CalorieTargetController extends Controller
{
    public function index(){
        return view('mypage.calorie_target.index');
        }

    public function store(Request $request)
    {
 
          $post = new CalorieTarget();
          $post->user_id = 1;
          $post->calorie = $request->calorie;
          $post->save();
  
          return view('mypage.calorie_target.finishadd');
    }

    public function finishadd(){
        return view('mypage.calorie_target.finishadd');
    }
}
