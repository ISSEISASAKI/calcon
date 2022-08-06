<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenremanagementController extends Controller
{
    //セブンイレブン管理
    public function se_onigiri(){
        return view('Genremanagement.seveneleven.onigiri');
        }

    public function se_ice(){
        return view('Genremanagement.seveneleven.ice');
        }
    
    public function se_obento(){
        return view('Genremanagement.seveneleven.obento');
        }

    public function se_drink(){
        return view('Genremanagement.seveneleven.drink');
        }

    public function se_sweets(){
        return view('Genremanagement.familymart.sweets');
        }
    
    //ファミリーマート管理
    public function fm_onigiri(){
        return view('Genremanagement.familymart.onigiri');
        }

    public function fm_ice(){
        return view('Genremanagement.familymart.ice');
        }
    
    public function fm_obento(){
        return view('Genremanagement.familymart.obento');
        }

    public function fm_drink(){
        return view('Genremanagement.familymart.drink');
        }

    public function fm_sweets(){
        return view('Genremanagement.familymart.sweets');
        }
    
    //ローソン管理
    public function lw_onigiri(){
        return view('Genremanagement.lowson.onigiri');
        }

    public function lw_ice(){
        return view('Genremanagement.lowson.ice');
        }
    
    public function lw_obento(){
        return view('Genremanagement.lowson.obento');
        }

    public function lw_drink(){
        return view('Genremanagement.lowson.drink');
        }

    public function lw_sweets(){
        return view('Genremanagement.lowson.sweets');
        }

    //デイリーヤマザキ管理
    public function dy_onigiri(){
        return view('Genremanagement.dailyyamazaki.onigiri');
        }

    public function dy_ice(){
        return view('Genremanagement.dailyyamazaki.ice');
        }
    
    public function dy_obento(){
        return view('Genremanagement.dailyyamazaki.obento');
        }

    public function dy_drink(){
        return view('Genremanagement.dailyyamazaki.drink');
        }

    public function dy_sweets(){
        return view('Genremanagement.dailyyamazaki.sweets');
        }

    //ミニストップ管理
    public function ms_onigiri(){
        return view('Genremanagement.ministop.onigiri');
        }

    public function ms_ice(){
        return view('Genremanagement.ministop.ice');
        }
    
    public function ms_obento(){
        return view('Genremanagement.ministop.obento');
        }

    public function ms_drink(){
        return view('Genremanagement.ministop.drink');
        }

    public function ms_sweets(){
        return view('Genremanagement.ministop.sweets');
        }

}
