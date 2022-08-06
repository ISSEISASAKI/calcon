<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoretypesController extends Controller
{
    public function index(){
        return view('storetypes.index');
        }

    public function seveneleven(){
        return view('storetypes.seveneleven.index');
        }

    public function familymart(){
        return view('storetypes.familymart.index');
        }
    
    public function lowson(){
        return view('storetypes.lowson.index');
        }

    public function dailyyamazaki(){
        return view('storetypes.dailyyamazaki.index');
        }

    public function ministop(){
        return view('storetypes.ministop.index');
        }
}
