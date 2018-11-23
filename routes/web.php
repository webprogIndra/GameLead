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

Route::get('/login',function () {
    return 'ini Login page';
});

Route::get('/home/{name}', function ($name){
    return 'Welcome, ' .$name;
});

Route::get('/home', function(){
   return view('home');
});
// salah satu caranya
//Route::get('/product', function(){
//    return view('product');
//});

Route::get('/home','MyController@showHome') ->name('showHome');
Route::get('/product','MyController@showProduct')->name('showProduct');