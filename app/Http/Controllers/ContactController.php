<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    protected function validator(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
        ],

            [
                'name.required' => '名前は必須項目です。',
                'email.required'  => 'メールアドレスは必須項目です。',
                'email.email'  => 'メールアドレスで入力して下さい。',
                'contact.required' => '問い合わせ内容は必須項目です。',
                'contact.max' => '問い合わせ内容は255文字以内で入力して下さい。',
            ]);
    }


    public function index(Request $request) {

        return view('contact.index');
    }

    public function confirmation(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
        ],

            [
                'name.required' => '名前は必須項目です。',
                'email.required'  => 'メールアドレスは必須項目です。',
                'email.email'  => 'メールアドレスで入力して下さい。',
                'contact.required' => '問い合わせ内容は必須項目です。',
                'contact.max' => '問い合わせ内容は255文字以内で入力して下さい。',
            ]);


        $user_id = Auth::user();
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
    
        return view('contact.confirmation', compact('name', 'email', 'contact'));
    }
    
    public function store(Request $request) {
        $user_id = Auth::user();
 
        $contacts = new Contact();
        //$post->name = $request->name;
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
