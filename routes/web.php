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



//Route::get('/', function () {
//    return view('index');
//});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/infinity', 'InfinityController@index')->name('infinity');


Route::get('/', function () {
    return view('infinity');
});



//
//Route::get('/{name}', function () {
//    return view('infinity');
//})->where('name', '/^#.+/');
//
//Route::get('user/{id}', 'UserController@profile')->where('id', '[0-9]+');

//
//Route::get('/home', function () {
//    return view('home');
//})->name('home');
