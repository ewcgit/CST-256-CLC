<?php

use App\Http\Controllers\LoginController;

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
    return view('home');
});

Route::get('/hello', function () {
	echo "Hello World";
});

Route::get('/helloworld', function () {
	return view("helloworld");
});

Route::get('/test', 'TestController@test2');

Route::get('/home', function () {
	return view("home");
});

Route::get('/login', function () {
	return view("login");
});

Route::get('/logout', function () {
	return view("logout");
});

Route::get('/home', function () {
	return view("home");
});

Route::get('/registration', function () {
	return view("registration");
});

Route::get('/loginSuccess', function () {
	return view("loginResponse");
});

Route::post('loginSuccess', 'LoginController@validateLogin');



