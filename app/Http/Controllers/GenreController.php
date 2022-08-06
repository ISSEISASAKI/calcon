<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    //セブンイレブン
    public function se_onigiri(){
        return view('genre.seveneleven.onigiri');
        }

    public function se_ice(){
       return view('genre.seveneleven.ice');
        }
    
    public function se_obento(){
        return view('genre.seveneleven.obento');
        }

    public function se_drink(){
        return view('genre.seveneleven.drink');
        }

    public function se_sweets(){
        return view('genre.seveneleven.sweets');
        } 

    //ファミリーマート
    public function fm_onigiri(){
        return view('genre.familymart.onigiri');
        }

    public function fm_ice(){
       return view('genre.familymart.ice');
        }
    
    public function fm_obento(){
        return view('genre.familymart.obento');
        }

    public function fm_drink(){
        return view('genre.familymart.drink');
        }

    public function fm_sweets(){
        return view('genre.familymart.sweets');
        } 
    
    //ローソン
    public function lw_onigiri(){
        return view('genre.lowson.onigiri');
        }

    public function lw_ice(){
       return view('genre.lowson.ice');
        }
    
    public function lw_obento(){
        return view('genre.lowson.obento');
        }

    public function lw_drink(){
        return view('genre.lowson.drink');
        }

    public function lw_sweets(){
        return view('genre.lowson.sweets');
        }
    
    //デイリーヤマザキ
    public function dy_onigiri(){
        return view('genre.dailyyamazaki.onigiri');
        }

    public function dy_ice(){
       return view('genre.dailyyamazaki.ice');
        }
    
    public function dy_obento(){
        return view('genre.dailyyamazaki.obento');
        }

    public function dy_drink(){
        return view('genre.dailyyamazaki.drink');
        }

    public function dy_sweets(){
        return view('genre.dailyyamazaki.sweets');
        }
    
    //ミニストップ
    public function ms_onigiri(){
        return view('genre.ministop.onigiri');
        }

    public function ms_ice(){
       return view('genre.ministop.ice');
        }
    
    public function ms_obento(){
        return view('genre.ministop.obento');
        }

    public function ms_drink(){
        return view('genre.ministop.drink');
        }

    public function ms_sweets(){
        return view('genre.ministop.sweets');
        }
    
}
