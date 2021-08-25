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
Route::group(['middleware' => ['auth']], function () {
    //Route::get('index/{user}', 'UsersController@index')->name('users.index');
    Route::get('mypage','UsersController@mypage')->name('users.mypage');
    
    Route::get('myprofile','ProfileController@myprofile')->name('users.myprofile');
    Route::get('users/create', 'ProfileController@create')->name('users.create');
    Route::get('myprofile/edit','ProfileController@edit')->name('users.edit');
    Route::post('myprofile/store', 'ProfileController@store')->name('users.store');
    Route::put('myprofile/update', 'ProfileController@update')->name('users.update');
});
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

