<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoretypesmanagementController extends Controller
{
    public function index(){
        return view('storetypesmanagement.index');
        }

    public function seveneleven(){
        return view('storetypesmanagement.seveneleven.index');
        }

    public function familymart(){
        return view('storetypesmanagement.familymart.index');
        }
    
    public function lowson(){
        return view('storetypesmanagement.lowson.index');
        }

    public function dailyyamazaki(){
        return view('storetypesmanagement.dailyyamazaki.index');
        }

    public function ministop(){
        return view('storetypesmanagement.ministop.index');
        }
}
