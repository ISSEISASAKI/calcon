<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;

class DashboardController extends Controller
{
    public function index(){
        $store_type_managements = StoreType::all(); 
        //$store_type_managements = Store_type_management:all();



        return view('dashboard.index', compact('store_type_managements'));
    }

    public function edit($id){
        $store_type_managements = StoreType::find($id);
        return view('dashboard.edit', compact('store_type_managements'));
    }

    public function destroy($id){
        $store_type_managements = StoreType::find($id);
    
        $store_type_managements->delete();
 
         return view('dashboard.index');
    }


}
