<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;


class TopPageController extends Controller
{
    public function index(){
        $store_types = StoreType::all(); 
        //$store_types = select('select * from store_types');

            
        return view('toppage.index', compact('store_types'));
    }
    
    public function ranking(){
        return view('toppage.ranking');
        }
    public function calorie(){
        return view('toppage.calorie');
        }
}
