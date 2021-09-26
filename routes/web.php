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

Route::post('/dologin', 'LoginController@index');

Route::post('/register', 'RegisterController@index');

Route::get('/loginfailed', function() {
	return view('loginFailed');
});
	
Route::get('/loginpassed', function() {
	return view('loginPassed');
});

Route::get('/dashboard', function () {
	return view("landingPage");
});

Route::get('/profile', function () {
	return view("profile");
});

Route::get('/registration', function () {
	return view("registration");
});

Route::get('/registrationfailed', function() {
	return view('registrationFailed');
});



