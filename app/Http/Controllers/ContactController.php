<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(Request $request) {
        return view('contact.index');
    }

    //問い合わせ内容確認画面
    public function confirmation(Request $request) {
        $user_id = Auth::user();
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;

        $request->validate([
            'email' => 'required|string|email',
            'contact' => 'required',
        ],
        [
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email'  => 'メールアドレスで入力して下さい。',
            'contact.required'  => '問い合わせ内容は必須項目です。',
        ]);
    
        return view('contact.confirmation', compact('name', 'email', 'contact'));
    }
    
    //問い合わせ追加処理
    public function store(Request $request) {
        $user_id = Auth::user()->name;
 
        $contacts = new Contact();
        $contacts->email = $request->email;
        $contacts->contact = $request->contact;
        if (Auth::check()){
            $contacts->user_id = $user_id;
        } else {
            $contacts->user_id = 'guest';
        }
        $contacts->response_flg = TRUE;
        $contacts->save();
  
        return view('contact.finishadd');
    }

    public function finishadd() {
        return view('contact.finishadd');
    }
}
