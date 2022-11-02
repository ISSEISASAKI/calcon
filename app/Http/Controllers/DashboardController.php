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

    //お問い合わせ内容確認画面
    public function contact() {
        $contact_confirms = Contact::all(); 

        return view('dashboard.contact', compact('contact_confirms'));
    }

    //お問い合わせ内容確認詳細画面
    public function contact_detail(Request $request) {
        $contact_details = $request -> contact_detail;
        $contact_id = $request -> contact_id;

        return view('dashboard.contact_detail', compact('contact_details', 'contact_id'));
    }

    //お問い合わせ内容削除処理
    public function destroy(Request $request) {
        $contact_id = $request -> contact_id;

        $contact_confirms = Contact::find($contact_id);
        $contact_confirms->delete();

        $contact_confirms = Contact::all(); 
 
        return view('dashboard.contact', compact('contact_confirms', 'contact_id'));
    }
}
