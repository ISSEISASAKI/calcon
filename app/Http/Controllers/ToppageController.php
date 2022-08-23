<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
    public function index(){
        //$store_types = Store_type:all();
            $store_types = [
                [
                    'id' => 1,
                    'name' => 'セブンイレブン',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 2,
                    'name' => 'ファミリーマート',  
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 3,
                    'name' => 'ローソン',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 4,
                    'name' => 'デイリーヤマザキ',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],
                [
                    'id' => 5,
                    'name' => 'ミニストップ',
                    'img_filename' => '',
                    'admin_id' => '',
                    'created_at' => '',
                    'updated_at' => '',
                    'deleted_at' => '',
                ],

            ];
            return view('toppage.index', compact('store_types'));
    }
    
    public function ranking(){
        return view('toppage.ranking');
        }
    public function calorie(){
        return view('toppage.calorie');
        }
}
