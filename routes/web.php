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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/Jay/j1', function(){
    return view('Jay.j1');
});
Route::get('/Jay/j2', function(){
    return view('Jay.j2');
});

Route::get('/ching/c1', function(){
    return view('ching.c1');
});

Route::get('/ching/c2', function(){
    return view('ching.c2');
});

