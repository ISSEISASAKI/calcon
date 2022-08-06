<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
        }
    
    public function add(){
        return view('dashboard.add');
        }

    public function finishadd(){
        return view('dashboard.finishadd');
        }
}
