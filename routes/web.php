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
Route::get('xxx/{id}', function ($id) {
    return "<h1 style='color:red'>Suthi".$id."</h1>";
});
Route::get('test', function () {
    return  view('test');
});
Route::post('lover', function () {
	$key = Input::get('username');
    return  "My Lover is ".$key;
});
Route::get('insert', function () {
    return  view('insertdata');
});

Route::post('insert','Tester@show');
Route::get('searchuser','Tester@searchuser');
Route::post('searchuserone','Tester@searchuserone');
Route::get('userdetail/{id?}','Tester@showdetail');
Route::post('intran','Tester@intran');

