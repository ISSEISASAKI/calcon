<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index(){
        return view('mypage.index');
        }

    public function logout(){
        return view('mypage.logout');
        }
    public function editmember(){
        return view('mypage.editmember');
        }
    public function targetcalorie(){
        return view('mypage.targetcalorie');
        }
    
    public function purchasehistory(){
        return view('mypage.purchasehistory.index');
        }
    
    //セブンイレブン購入履歴
    public function se_purchasehistory(){
        return view('mypage.purchasehistory.se_purchasehistory');
        }
}
