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

Route::get('/test', function () {
    return view('test');
});


// ------------User----------------

Route::get('/user/firstlogin', function () {
    return view('User.auth.firstlogin');
});

Route::get('/user/firstregister', function () {
    return view('User.auth.firstregister');
});

Route::get('/user/dashboard', function () {
    return view('User.dashboard');
});

Route::get('/user/test', function () {
    return view('User.test.score');
});
