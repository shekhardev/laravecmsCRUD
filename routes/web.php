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
Route::get('/testview', function () {
    return view('testView.test');
});
Route::get('/index', 'TestController@index');
Route::post('/store', 'TestController@store');
//product resource Controller
Route::resource('products', 'ProdutController');
