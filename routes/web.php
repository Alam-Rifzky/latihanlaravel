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
Route::post('/', ['uses' => 'Users@cobalogin']);

Route::get('register', 'Users@register');
Route::post('register', ['uses' => 'Users@registerstore']);

Route::resource('user', 'Users');

Route::get('user/{$user}', 'Users@show');
Route::get('user/delete/{user}', 'Users@deleteconfirm');
Route::get('json/user/', 'Users@alljson');
Route::get('json/user/{user}', 'Users@userjson');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
