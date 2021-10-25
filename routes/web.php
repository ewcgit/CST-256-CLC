<?php // CST-256 page by team.

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
    return view('home'); // Returns to home page.
});

Route::get('/home', function () {
	return view("home"); // Returns to home page.
});

Route::get('/login', function () {
	return view("login"); // Returns to login page.
});

Route::get('/logout', function () {
	return view("logout"); // Logs the user out.
});

Route::get('/home', function () {
	return view("home"); // Returns to home page.
});

Route::post('/dologin', 'LoginController@index'); // Login handler.

Route::post('/register', 'RegisterController@index'); // Registration handler.
    
Route::get('/loginfailed', function() {
	return view('loginFailed'); // Logs the user out.
});

Route::get('/dashboard', function () {
	return view("landingPage"); // Success redirect.
});


Route::get('/registration', function () {
	return view("registration"); // Registration redirect.
});

Route::get('/registrationfailed', function() {
	return view('registrationFailed'); // For all failed registrations.
});

Route::get('/profile', function() {
	return view('userProfile'); // To visit the current user's profile.
});

Route::get('/adminpanel', function() {
	return view('adminPanel'); // Staff only.
});



Route::get('/error', function() {
	return view('errorPage'); // Error Page.
});

Route::get('/posting', function () {
	return view("jobPosting"); // Returns to home page.
});

Route::get('/editUser', function () {
	return view("editUser"); // Returns to home page.
});

Route::get('/deleteUser', function () {
	return view("deleteUser"); // Returns to home page.
});
Route::get('/affinity', 'ProfileController@affinityMemberDisplay');//Affility Member Display     
Route::get('/remove', 'ProfileController@removeAffinity');//Affility Member Display
	
Route::post('/profile', 'ProfileController@userProfile'); // Profile handler.

Route::post('/portfolio', 'ProfileController@eportfolioProfile'); // Portfolio handler.

Route::post('/updateProfile', 'ProfileController@updateProfile'); // Profile handler.

Route::post('/deleteUser', 'AdminController@deleteUser'); // Admin DeleteUser Functionality

Route::post('/editUser', 'AdminController@updateUserProfile'); // Admin DeleteUser Functionality

Route::post('/eprofile', 'ProfileController@eportfolioProfile'); // Portfolio handler.

Route::post('/addGroup', 'ProfileController@addAffinity'); // 


