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
Route::get('/toppage/ranking', 'ToppageController@ranking');
Route::get('/toppage/calorie', 'ToppageController@calorie');

//マイページ
Route::get('/mypage', 'MypageController@index');
Route::get('/mypage/logout', 'MypageController@logout');
Route::get('/mypage/editmember', 'MypageController@editmember');
Route::get('/mypage/targetcalorie', 'MypageController@targetcalorie');
Route::get('/mypage/purchasehistory', 'MypageController@purchasehistory');
//コンビニ購入履歴
Route::get('/mypage/purchasehistory/se_purchasehistory', 'MypageController@se_purchasehistory');

//トップページ管理
Route::get('/dashboard', 'DashboardController@index');
//コンビニ追加ページ
Route::get('/dashboard/add', 'DashboardController@add');
Route::get('/dashboard/finishadd', 'DashboardController@finishadd');

//コンビニ種類管理
Route::get('/storetypesmanagement', 'StoretypesmanagementController@index');
Route::get('/storetypesmanagement/seveneleven/index', 'StoretypesmanagementController@seveneleven');
Route::get('/storetypesmanagement/familymart/index', 'StoretypesmanagementController@familymart');
Route::get('/storetypesmanagement/lowson/index', 'StoretypesmanagementController@lowson');
Route::get('/storetypesmanagement/dailyyamazaki/index', 'StoretypesmanagementController@dailyyamazaki');
Route::get('/storetypesmanagement/ministop/index', 'StoretypesmanagementController@ministop');

//コンビニページ
Route::get('/storetypes', 'StoretypesController@index');
Route::get('/storetypes/seveneleven/index', 'StoretypesController@seveneleven');
Route::get('/storetypes/familymart/index', 'StoretypesController@familymart');
Route::get('/storetypes/lowson/index', 'StoretypesController@lowson');
Route::get('/storetypes/dailyyamazaki/index', 'StoretypesController@dailyyamazaki');
Route::get('/storetypes/ministop/index', 'StoretypesController@ministop');

//セブンイレブンジャンル管理
Route::get('/genremanagement/seveneleven/onigiri', 'GenremanagementController@se_onigiri');
Route::get('/genremanagement/seveneleven/ice', 'GenremanagementController@se_ice');
Route::get('/genremanagement/seveneleven/obento', 'GenremanagementController@se_obento');
Route::get('/genremanagement/seveneleven/drink', 'GenremanagementController@se_drink');
Route::get('/genremanagement/seveneleven/sweets', 'GenremanagementController@se_sweets');

//ファミリーマートジャンル管理
Route::get('/genremanagement/familymart/onigiri', 'GenremanagementController@fm_onigiri');
Route::get('/genremanagement/familymart/ice', 'GenremanagementController@fm_ice');
Route::get('/genremanagement/familymart/obento', 'GenremanagementController@fm_obento');
Route::get('/genremanagement/familymart/drink', 'GenremanagementController@fm_drink');
Route::get('/genremanagement/familymart/sweets', 'GenremanagementController@fm_sweets');

//ローソンジャンル管理
Route::get('/genremanagement/lowson/onigiri', 'GenremanagementController@lw_onigiri');
Route::get('/genremanagement/lowson/ice', 'GenremanagementController@lw_ice');
Route::get('/genremanagement/lowson/obento', 'GenremanagementController@lw_obento');
Route::get('/genremanagement/lowson/drink', 'GenremanagementController@lw_drink');
Route::get('/genremanagement/lowson/sweets', 'GenremanagementController@lw_sweets');

//デイリーヤマザキジャンル管理
Route::get('/genremanagement/dailyyamazaki/onigiri', 'GenremanagementController@dy_onigiri');
Route::get('/genremanagement/dailyyamazaki/ice', 'GenremanagementController@dy_ice');
Route::get('/genremanagement/dailyyamazaki/obento', 'GenremanagementController@dy_obento');
Route::get('/genremanagement/dailyyamazaki/drink', 'GenremanagementController@dy_drink');
Route::get('/genremanagement/dailyyamazaki/sweets', 'GenremanagementController@dy_sweets');

//ミニストップジャンル管理
Route::get('/genremanagement/ministop/onigiri', 'GenremanagementController@ms_onigiri');
Route::get('/genremanagement/ministop/ice', 'GenremanagementController@ms_ice');
Route::get('/genremanagement/ministop/obento', 'GenremanagementController@ms_obento');
Route::get('/genremanagement/ministop/drink', 'GenremanagementController@ms_drink');
Route::get('/genremanagement/ministop/sweets', 'GenremanagementController@ms_sweets');


//セブンイレブンジャンル
Route::get('/genre/seveneleven/onigiri', 'GenreController@se_onigiri');
Route::get('/genre/seveneleven/ice', 'GenreController@se_ice');
Route::get('/genre/seveneleven/obento', 'GenreController@se_obento');
Route::get('/genre/seveneleven/drink', 'GenreController@se_drink');
Route::get('/genre/seveneleven/sweets', 'GenreController@se_sweets');

//ファミリーマートジャンル
Route::get('/genre/familymart/onigiri', 'GenreController@fm_onigiri');
Route::get('/genre/familymart/ice', 'GenreController@fm_ice');
Route::get('/genre/familymart/obento', 'GenreController@fm_obento');
Route::get('/genre/familymart/drink', 'GenreController@fm_drink');
Route::get('/genre/familymart/sweets', 'GenreController@fm_sweets');

//ローソンジャンル管理
Route::get('/genre/lowson/onigiri', 'GenreController@lw_onigiri');
Route::get('/genre/lowson/ice', 'GenreController@lw_ice');
Route::get('/genre/lowson/obento', 'GenreController@lw_obento');
Route::get('/genre/lowson/drink', 'GenreController@lw_drink');
Route::get('/genre/lowson/sweets', 'GenreController@lw_sweets');

//デイリーヤマザキジャンル管理
Route::get('/genre/dailyyamazaki/onigiri', 'GenreController@dy_onigiri');
Route::get('/genre/dailyyamazaki/ice', 'GenreController@dy_ice');
Route::get('/genre/dailyyamazaki/obento', 'GenreController@dy_obento');
Route::get('/genre/dailyyamazaki/drink', 'GenreController@dy_drink');
Route::get('/genre/dailyyamazaki/sweets', 'GenreController@dy_sweets');

//ミニストップジャンル管理
Route::get('/genre/ministop/onigiri', 'GenreController@ms_onigiri');
Route::get('/genre/ministop/ice', 'GenreController@ms_ice');
Route::get('/genre/ministop/obento', 'GenreController@ms_obento');
Route::get('/genre/ministop/drink', 'GenreController@ms_drink');
Route::get('/genre/ministop/sweets', 'GenreController@ms_sweets');

//お問い合わせ
Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/finish', 'ContactsController@finish');
