<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
    public function index(){
        return view('toppage.index');
        }
    
    public function ranking(){
        return view('toppage.ranking');
        }
    public function calorie(){
        return view('toppage.calorie');
        }
}
