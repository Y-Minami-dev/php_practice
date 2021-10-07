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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'member'], function(){
    Route::get('photo/create', 'Member\PhotoController@add');
    Route::get('photo/delete', 'Member\PhotoController@delete');
    Route::get('photo/update', 'Member\PhotoController@update');
    Route::get('photo/create', 'Member\PhotoController@add')->middleware('auth');
    
    Route::get('profile/create', 'Member\PhotoController@add');
    Route::get('profile/delete', 'Member\PhotoController@delete');
    Route::get('profile/update', 'Member\PhotoController@update');
    Route::get('profile/create', 'Member\PhotoController@add')->middleware('auth');
});

Route::group(['prefix' => 'member', 'middleware' => 'auth'], function(){
    Route::get('photo/create', 'Member\PhotoController@add');
    Route::post('photo/create', 'Member\PhotoController@create');
    
    Route::get('profile/create', 'Member\ProfileController@add');
    Route::post('profileo/create', 'Member\ProfileController@create');
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//管理側
Route::group(['middleware' => ['auth.admin']], function () {
	
	//管理側トップ
	Route::get('/admin', 'Admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'Admin\AdminLogoutController@logout');
	//ユーザー一覧
	Route::get('/admin/user_list', 'Admin\ManageUserController@showUserList');
	//ユーザー詳細
	Route::get('/admin/user/{id}', 'Admin\ManageUserController@showUserDetail');

});

//管理側ログイン
Route::get('/admin/login', 'Admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'Admin\AdminLoginController@login');