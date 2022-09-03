<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//トップページ
Route::get('/', 'ToppageController@index');
Route::get('/toppage/ranking', 'ToppageController@ranking') -> name('toppage.ranking');
Route::get('/toppage/calorie_management', 'CalorieManagementController@index') -> name('calorie_management.index');

//マイページ
Route::get('/mypage', 'MypageController@index') -> name('mypage');
Route::get('/mypage/logout', 'MypageController@logout') ->name('mypage.logout');
Route::get('/mypage/editmember', 'MypageController@editmember') -> name('mypage.editmember');
//目標カロリー登録画面
Route::get('/mypage/calorie_target', 'CalorieTargetController@index') -> name('calorie_target.index');
Route::post('/mypage/calorie_target/finishadd', 'CalorieTargetController@store') -> name('calorie_target.store');
Route::get('/mypage/calorie_target/finishadd', 'CalorieTargetController@finishadd') -> name('calorie_target.finishadd');

//コンビニ購入履歴
Route::get('/mypage/purchasehistory', 'MypageController@purchasehistory') -> name('mypage.purchasehistory');
Route::get('/mypage/purchasehistory/se_purchasehistory', 'MypageController@se_purchasehistory');

//トップページ管理
Route::get('/dashboard', 'DashboardController@index') -> name('dashboard.index');
//コンビニ名追加
Route::get('/add', 'StoretypeManagementController@add') -> name('storetype_management.add');
Route::post('/add/finishadd', 'StoretypeManagementController@store') -> name('storetype_management.store');
Route::get('/add/finishadd', 'StoretypeManagementController@finishadd') -> name('storetype_management.finishadd');
//コンビニ名削除
Route::post('/destroy{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

//ジャンル管理
Route::get('/genre_management', 'GenreManagementController@index') -> name('genre_management.index');
//ジャンル追加ページ
Route::get('/genre_management/add', 'GenreManagementController@add') -> name('genre_management.add');
Route::post('/genre_management/add/finishadd', 'GenreManagementController@store') -> name('genre_management.store');
Route::get('/genre_management/add/finishadd', 'GenreManagementController@finishadd') -> name('genre_management.finishadd');

//ジャンルページ
Route::get('/genre', 'GenreController@index') -> name('genre.index');


//商品管理
Route::get('/product_management', 'ProductManagementController@index') -> name('product_management.index');
//商品追加ページ
Route::post('/product_management/finishadd', 'ProductManagementController@store') -> name('product_management.store');
Route::get('/product_management/finishadd', 'ProductManagementController@finishadd') -> name('product_management.finishadd');


//商品ページ
Route::get('/product/index', 'ProductController@index') -> name('product.index');



//お問い合わせ
Route::get('/contact', 'ContactController@index') -> name('contact.index');
//お問い合わせ内容送信
Route::post('/contact/finishadd', 'ContactController@store') -> name('contact.store');
Route::get('/contact/finishadd', 'ContactController@finishadd') -> name ('contact.finishadd');
