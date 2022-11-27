<?php

use Illuminate\Database\Seeder;
use App\StoreType;
use App\Genre;
use App\Product;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SetteingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $randomname = Str::random(40);
        $from = database_path( 'migration/1.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname . '.png');

        $store1 = StoreType::create([
            'name' => 'test',
            'img_filename' => 'img/' . $randomname . '.png',
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
