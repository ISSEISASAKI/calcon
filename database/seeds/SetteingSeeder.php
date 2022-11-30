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
        File::copy($from, $to . $randomname);

        $store1 = StoreType::create([
            'name' => 'セブンイレブン',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/2.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        $store2 = StoreType::create([
            'name' => 'ファミリーマート',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/3.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        $store3 = StoreType::create([
            'name' => 'ローソン',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $genre1 = Genre::create([
            'name' => 'おにぎり',
            'admin_id' => 'seeder',
        ]);

        $genre2 = Genre::create([
            'name' => 'お弁当',
            'admin_id' => 'seeder',
        ]);

        $genre3 = Genre::create([
            'name' => 'スイーツ',
            'admin_id' => 'seeder',
        ]);

        //セブンイレブンおにぎり
        $randomname = Str::random(40);
        $from = database_path( 'migration/4.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'おにぎり(紀州南高梅)',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '166',
            'price' => '124',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/5.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'おにぎり(辛子明太子)',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '169',
            'price' => '178',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/6.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'おにぎり(北海道昆布)',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '172',
            'price' => '118',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/7.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'おにぎり(紅しゃけ)',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '175',
            'price' => '178',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //セブンイレブンお弁当
        $randomname = Str::random(40);
        $from = database_path( 'migration/8.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '塩レモンだれのねぎ塩豚カルビ弁当（麦飯）',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '590',
            'price' => '486',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/10.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '明太マヨのスパゲティ',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '673',
            'price' => '421',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/10.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '明太マヨのスパゲティ',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '673',
            'price' => '421',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/11.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'ベーコンとケチャップソースのナポリタン',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '480',
            'price' => '399',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/12.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'ホワイトソースの旨み海老グラタン',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '373',
            'price' => '496',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //セブンイレブンスイーツ
        $randomname = Str::random(40);
        $from = database_path( 'migration/13.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'チョコバナナクレープ',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '254',
            'price' => '237',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/14.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'カカオ香るエクレア　カスタード',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '233',
            'price' => '159',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/15.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'こだわりたまごのカスタード＆ホイップシュー',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '265',
            'price' => '159',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/16.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '７プレミアム　しろもちたい焼き',
            'store_type_id' => $store1 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '230',
            'price' => '138',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ファミリーマートおにぎり
        $randomname = Str::random(40);
        $from = database_path( 'migration/17.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '手巻　紀州南高梅',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '180',
            'price' => '130',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/18.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '手巻　紅しゃけ',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '182',
            'price' => '165',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/19.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '直巻　和風ツナマヨネーズ',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '250',
            'price' => '128',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ファミリーマートお弁当
        $randomname = Str::random(40);
        $from = database_path( 'migration/20.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '丸鶏の旨味とコク！チャーシュー炒飯',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '697',
            'price' => '435',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/21.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '特製デミグラスソースのふわとろオムライス',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '542',
            'price' => '498',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/22.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '香ばし炒めのあんかけ焼そば',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '454',
            'price' => '550',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/23.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'ベーコンときのこの醤油スパゲティ',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '474',
            'price' => '400',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ファミリーマートスイーツ
        $randomname = Str::random(40);
        $from = database_path( 'migration/24.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '香ばしいクッキーのクリ－ムサンド（ラムレーズン）',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '348',
            'price' => '150',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/25.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '生とろプリン　キャラメル',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '225',
            'price' => '170',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/26.jpeg');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '冷やして食べるしっとり食感のバウム',
            'store_type_id' => $store2 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '326',
            'price' => '158',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ローソンおにぎり
        $randomname = Str::random(40);
        $from = database_path( 'migration/27.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '手巻おにぎり　熟成紀州南高梅',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '169',
            'price' => '125',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/28.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '手巻おにぎり　追い鰹製法おかか',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '179',
            'price' => '116',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/29.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '手巻おにぎり　海老マヨネーズ',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '191',
            'price' => '160',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/30.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '鶏五目おにぎり',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '171',
            'price' => '138',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/31.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'わかめごはんおにぎり',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre1 -> id,
            'calorie' => '174',
            'price' => '138',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ローソンお弁当
        $randomname = Str::random(40);
        $from = database_path( 'migration/32.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'おてがる鶏そぼろご飯(もち麦入りご飯)',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '323',
            'price' => '322',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/33.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '紅鮭和風幕の内(きのこ炊込みご飯)',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '481',
            'price' => '646',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/34.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'まんぷくミートソース',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '728',
            'price' => '559',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/35.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'まんぷくペペロンチーノ',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre2 -> id,
            'calorie' => '911',
            'price' => '599',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        //ローソンスイーツ
        $randomname = Str::random(40);
        $from = database_path( 'migration/36.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'クッキー＆クリームシュー',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '435',
            'price' => '235',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/37.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'ふんわりワッフル(カスタード＆ホイップ)',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '200',
            'price' => '149',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/38.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => '大きな生カスタードエクレア',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '372',
            'price' => '189',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/39.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'どらもっち(あんこ＆ホイップ)',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '261',
            'price' => '192',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        $randomname = Str::random(40);
        $from = database_path( 'migration/40.png');
        $to = storage_path( 'app/public/img/');
        File::copy($from, $to . $randomname);

        Product::create([
            'name' => 'もち食感ロール　北海道産生クリーム入り',
            'store_type_id' => $store3 -> id,
            'genre_id' => $genre3 -> id,
            'calorie' => '554',
            'price' => '322',
            'img_filename' => 'img/' . $randomname,
            'admin_id' => 'seeder',
        ]);

        Admin::create([
            'name' => 'seeder_admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Password123'),
        ]);
    }
}
