<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
        }
    
    public function store(Request $request)
    {
 
          $post = new Contact();
          //$post->name = $request->name;
          $post->email = $request->email;
          $post->contact = $request->contact;
          $post->user_id = 1;
          $post->response_flg = TRUE;
          $post->save();
  
          return view('contact.finishadd');
    }
    
    public function finishadd(){
        return view('contact.finishadd');
        }
}
