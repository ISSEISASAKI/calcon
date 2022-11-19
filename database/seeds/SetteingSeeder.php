<?php

use Illuminate\Database\Seeder;
use App\StoreType;
use App\Genre;
use App\Product;
use App\Admin;
use Illuminate\Support\Facades\Hash;


class SetteingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $store1 = StoreType::create([
            'name' => 'test',
            'img_filename' => 1,
            'admin_id' => 'seeder',
        ]);

        $genre1 = Genre::create([
            'name' => 'test',
            'admin_id' => 'seeder',
        ]);

        Product::create([
            'name' => 'おにぎり（テスト）',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '100',
            'price' => '150',
            'img_filename' => 1,
            'admin_id' => 'seeder',
        ]);

        Admin::create([
            'name' => 'seeder_admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Password123'),
        ]);
    }
}
