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

//課題４
//admin/profile/create にアクセスしたら 
//ProfileController のadd Action に割り当てる
Route::group(['prefix' => 'admin'], function() {
Route::get('profile/create', 'Admin\ProfileController@add');
});

//admin/profile/edit にアクセスしたら 
//ProfileController の edit Action に割り当てる
Route::group(['prefix' => 'admin'], function() {
Route::get('profile/edit', 'Admin\ProfileController@edit');
});
?>