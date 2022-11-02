<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieManagement;
use App\StoreType;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyPageController extends Controller
{
    //マイページトップ画面
    public function index() {
        return view('mypage.index');
    }

    public function logout() {
        return view('mypage.logout');
    }
    public function edit_member() {
        return view('mypage.edit_member.index');
    }

    public function edit_member_update(Request $request) {
        $user_id = Auth::user()->id;
        $name = $request -> name;
        $email = $request -> email;
        $password = $request -> password;

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|regex:/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\-]{8,24}$/',
        ],
        [
            'name.required' => '名前は必須項目です。',
            'email.required'  => 'メールアドレスは必須項目です。',
            'email.email'  => 'メールアドレスで入力して下さい。',
            'email.unique' => 'そのメールアドレスは既に使われています。',
            'password.required' => 'パスワードは必須項目です。',
            'password.confirmed'  => 'パスワードが異なります。',
            'password.regex'  => 'パスワードは大文字、小文字、数字をそれぞれ1つ以上使用し、半角8文字以上で設定して下さい。',
        ]);
      
        $user_details = User::find($user_id);
        $user_details->name = $request->name;
        $user_details->email = $request->email;
        $user_details->password = Hash::make($request->password);
        $user_details->save();

        $user_details = User::all();        

        return view('mypage.edit_member.finishedit', compact('user_details'));
    }

    public function finishedit(Request $request) {
        return view('mypage.edit_member.finishedit');
    }

    public function history() {
        $user_id = Auth::user();
        $store_types = StoreType::all();
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
            ->where('date', date('Y-m-d'))
            ->get();
        
        if ($calorie_managements->isEmpty()) {
            return view('mypage.purchase_history.index', compact('calorie_managements', 'store_types'));
        } else {

        $total = [];
        foreach ($calorie_managements as $calorie_management) {
            $product = Product::find($calorie_management['product_id']);  
            $store = StoreType::find($product['store_type_id']);

            $item = [$store,$product];

            $total[] = $item;       
        }           

        return view('mypage.purchase_history.index', compact('store_types', 'calorie_managements', 'total'));
        }
    }

    //購入履歴
    public function store_type(Request $request) {
        $user_id = Auth::user();
        $store_type_id = $request->store_type_id;

        $store_types = StoreType::where('id', $store_type_id)
            ->get();

        foreach ($store_types as $store_type) {
            $store_name = $store_type['name'];
        }
        
        $calorie_managements = CalorieManagement::where('user_id', $user_id)
            ->where('store_type_id', $store_type_id)
            ->get();

            if ($calorie_managements->isEmpty()) {
            return view('mypage.purchase_history.store_type', compact('calorie_managements', 'store_name'));
            } else {
            $total = [];
            foreach ($calorie_managements as $calorie_management) {
            
                $product = Product::find($calorie_management['product_id']);
        
                $item = [$calorie_management, $product];
        
                $total[] = $item;
                }       
            }   

        return view('mypage.purchase_history.store_type', compact('store_name', 'total', 'calorie_managements'));
    }
}
