<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreType;
use App\Product;
use App\Contact;

class DashboardController extends Controller
{
    public function index() {
        $store_type_managements = StoreType::all(); 

        return view('dashboard.index', compact('store_type_managements'));
    }

    public function contact() {
        $contact_confirms = Contact::all(); 

        return view('dashboard.contact', compact('contact_confirms'));
    }

    public function contact_detail(Request $request) {
        $contact_details = $request -> contact_detail;

        return view('dashboard.contact_detail', compact('contact_details'));
    }

    public function destroy(Request $request) {
        $store_type_id = $request -> store_type_id;


        $product_managements = Product::where('store_type_id', $request->store_type_id);
        $product_managements->delete();

        $store_type_managements = StoreType::find($store_type_id);
        $store_type_managements->delete(); 
       
        $store_type_managements = StoreType::all();
 
        return view('dashboard.index', compact('store_type_managements'));
    }


}
