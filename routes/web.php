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

// Route::get('/index', function () {
//     return view('index');
// });

// ユーザ情報
Route::get('index/{user}', 'UsersController@index')->name('users.index');
//Route::get('users/{id}', 'UsersController@show')->name('users.show');
//Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
//Route::get('users/create', 'UsersController@create')->name('users.create');
//Route::put('users/update', 'UsersController@update')->name('users.update');
//Route::post('users/store', 'UsersController@store')->name('users.store');
//Route::get('users/edit', 'UsersController@edit')->name('users.edit');
//Route::delete('users/delete', 'UsersController@destroy')->name('users.destroy');

// ユーザ登録
//Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
//Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('signup', function(){
   return view('auth.register'); 
})->name('signup.get');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

