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
Route::get('/toppage/calorie', 'ToppageController@calorie') -> name('toppage.calorie');

//マイページ
Route::get('/mypage', 'MypageController@index') -> name('mypage');
Route::get('/mypage/logout', 'MypageController@logout') ->name('mypage.logout');
Route::get('/mypage/editmember', 'MypageController@editmember') -> name('mypage.editmember');
Route::get('/mypage/targetcalorie', 'MypageController@targetcalorie') -> name('mypage.targetcalorie');
Route::get('/mypage/purchasehistory', 'MypageController@purchasehistory') -> name('mypage.purchasehistory');
//コンビニ購入履歴
Route::get('/mypage/purchasehistory/se_purchasehistory', 'MypageController@se_purchasehistory');

//トップページ管理
Route::get('/dashboard', 'DashboardController@index') -> name('dashboard.index');
//コンビニ追加ページ
Route::get('/dashboard/add', 'DashboardController@add') -> name('dashboard.add');
Route::get('/dashboard/finishadd', 'DashboardController@finishadd') -> name('dashboard.finishadd');

//ジャンル管理
Route::get('/genremanagement', 'GenreManagementController@index') -> name('genremanagement.index');

//ジャンルページ
Route::get('/genre', 'GenreController@index') -> name('genre.index');


//商品管理
Route::get('/productmanagement', 'ProductManagementController@index') -> name('productmanagement.index');


//商品ページ
Route::get('/product/index', 'ProductController@index') -> name('product.index');



//お問い合わせ
Route::get('/contacts', 'ContactsController@index') -> name('contacts.index');
Route::get('/contacts/finish', 'ContactsController@finish');

//test
Route::resource('/posts', 'PostController@show');
