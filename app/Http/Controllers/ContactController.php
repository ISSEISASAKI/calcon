<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
        }

    public function confirmation(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
    
        return view('contact.confirmation', compact('name', 'email', 'contact'));
        }
    
    public function store(Request $request) {
 
        $contacts = new Contact();
        //$post->name = $request->name;
        $contacts->email = $request->email;
        $contacts->contact = $request->contact;
        $contacts->user_id = 1;
        $contacts->response_flg = TRUE;
        $contacts->save();
  
        return view('contact.finishadd');
    }


    public function finishadd() {
        return view('contact.finishadd');
        }
}
