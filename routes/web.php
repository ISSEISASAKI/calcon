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
Route::get('/', 'TopPageController@index') -> name('toppage.index');
Route::get('/toppage/ranking', 'TopPageController@ranking') -> name('toppage.ranking');
//摂取カロリー
Route::get('/toppage/calorie_management', 'CalorieManagementController@index') -> name('calorie_management.index');




//マイページ
Route::get('/mypage', 'MyPageController@index') -> name('mypage');
Route::get('/mypage/logout', 'MyPageController@logout') ->name('mypage.logout');
Route::get('/mypage/editmember', 'MyPageController@editmember') -> name('mypage.editmember');
Route::get('/mypage/purchase_history', 'MyPageController@purchase_history') -> name('mypage.purchase_history');

//目標カロリー登録画面
Route::get('/mypage/calorie_target', 'CalorieTargetController@index') -> name('calorie_target.index');
//目標カロリー登録
Route::post('/mypage/calorie_target/firstadd', 'CalorieTargetController@store') -> name('calorie_target.store');
//目標カロリー編集
Route::post('/mypage/calorie_target/finishadd', 'CalorieTargetController@update') -> name('calorie_target.update');
Route::get('/mypage/calorie_target/finishadd', 'CalorieTargetController@finishadd') -> name('calorie_target.finishadd');


//コンビニ購入履歴
Route::get('/mypage/purchasehistory', 'MyPageController@purchasehistory') -> name('mypage.purchasehistory');
Route::get('/mypage/purchasehistory/se_purchasehistory', 'MyPageController@se_purchasehistory');


//トップページ管理
Route::get('/dashboard', 'DashboardController@index') -> name('dashboard.index');
Route::get('/dashboard/contact', 'DashboardController@contact') -> name('dashboard.contact');

//コンビニ名追加
Route::get('/add', 'StoreTypeManagementController@add') -> name('storetype_management.add');
Route::post('/add/finishadd', 'StoreTypeManagementController@store') -> name('storetype_management.store');
Route::get('/add/finishadd', 'StoreTypeManagementController@finishadd') -> name('storetype_management.finishadd');

//コンビニ名編集
Route::get('/storetype_management/edit', 'StoreTypeManagementController@edit') -> name('storetype_management.edit');
Route::post('/storetype_management/update', 'StoreTypeManagementController@update') -> name('storetype_management.update');

//コンビニ名削除
Route::post('/destroy', 'DashboardController@destroy') -> name('dashboard.destroy');

//ジャンル管理
Route::get('/genre_management', 'GenreManagementController@index') -> name('genre_management.index');

//ジャンル追加
Route::get('/genre_management/add', 'GenreManagementController@add') -> name('genre_management.add');
Route::post('/genre_management/add/finishadd', 'GenreManagementController@store') -> name('genre_management.store');
Route::get('/genre_management/add/finishadd', 'GenreManagementController@finishadd') -> name('genre_management.finishadd');

//ジャンル編集
Route::get('/genre_management/edit', 'GenreManagementController@edit') -> name('genre_management.edit');
Route::post('/genre_management/update', 'GenreManagementController@update') -> name('genre_management.update');
Route::get('/genre_management/edit/finishedit', 'GenreManagementController@finishedit') -> name('genre_management.finishedit');

//ジャンル削除
Route::post('genre_management/destroy', 'GenreManagementController@destroy') -> name('genre_management.destroy');

//ジャンルページ
Route::get('/genre', 'GenreController@index') -> name('genre.index');


//商品管理
Route::get('/product_management', 'ProductManagementController@index') -> name('product_management.index');

//商品追加
Route::post('/product_management/finishadd', 'ProductManagementController@store') -> name('product_management.store');
Route::get('/product_management/finishadd', 'ProductManagementController@finishadd') -> name('product_management.finishadd');

//商品編集
Route::get('/product_management/edit', 'ProductManagementController@edit') -> name('product_management.edit');
Route::post('/product_management/update', 'ProductManagementController@update') -> name('product_management.update');
Route::get('/product_management/finishedit', 'ProductManagementController@finishedit') -> name('product_management.finishedit');

//商品削除
Route::post('product_management/destroy', 'ProductManagementController@destroy') -> name('product_management.destroy');


//商品ページ
Route::get('/product/index', 'ProductController@index') -> name('product.index');
Route::post('/product/finishadd', 'ProductController@finishadd') -> name('product.finishadd');



//お問い合わせ
Route::get('/contact', 'ContactController@index') -> name('contact.index');
//お問い合わせ内容確認
Route::post('/contact/confirmation', 'ContactController@confirmation') -> name ('contact.confirmation');
//お問い合わせ内容送信
Route::post('/contact/finishadd', 'ContactController@store') -> name('contact.store');
//お問い合わせ内容完了
Route::get('/contact/finishadd', 'ContactController@finishadd') -> name ('contact.finishadd');