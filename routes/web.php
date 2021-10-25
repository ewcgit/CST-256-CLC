<?php // CST-256 page by team.
	

<<<<<<< Updated upstream
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
=======
	use App\Http\Controllers\LoginController;
	
>>>>>>> Stashed changes

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
	

	// GET Routes
	Route::get('/', function () {
	    return view('home'); // Returns to home page.
	});
	

	Route::get('/home', function () {
		return view("landingPage"); // Returns to home page.
	});
	

<<<<<<< Updated upstream
Route::get('/home', function () {
	return view("home"); // Returns to home page.
});

Route::post('/dologin', 'LoginController@index'); // Login handler.

Route::post('/register', 'RegisterController@index'); // Registration handler.
    
Route::get('/loginfailed', function() {
	return view('loginFailed'); // Logs the user out.
});
=======
	Route::get('/login', function () {
		return view("login"); // Returns to login page.
	});
	
>>>>>>> Stashed changes



	Route::get('/loginfailed', function() {
		return view('loginFailed'); // Logs the user out.
	});
	

	Route::get('/dashboard', function () {
		return view("landingPage"); // Success redirect.
	});
	Route::get('/validateID','AdminController@showform');
	Route::post('/validateID','AdminController@validateform');

	

	Route::get('/registration', function () {
		return view("registration"); // Registration redirect.
	});
	

<<<<<<< Updated upstream


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
=======
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
	
	 Route::get('/jobError', function() {
	     return view('jobError.blade.php');
	 });
	        

	Route::get('/editUser', function () {
		return view("editUser"); // Returns to home page.
	});
	

	

	Route::get('/redirect', function() {
		return redirect('/home');
	});
	

	Route::get('/jobdetails', function () {
		return view('jobPostingDetail'); // Returns to home page.
	});
	

	Route::get('/posting', function () { // Job Posting Controller
		return view('jobPosting'); // Staff only.
	});
	

	Route::get('/newjoblisting', function () { // Job Posting Controller
		return view('newJobListing'); // Staff only.
	});
>>>>>>> Stashed changes
	

	Route::get('/api', function () {
		return view("apis"); // Takes the user to the API list page.
	});
	

	Route::get('/affinity', 'ProfileController@affinityMemberDisplay');//Affility Member Display
	

	// POST Routes
	   
	Route::post('/remove', 'ProfileController@removeAffinity');//Affility Member Display
	Route::get('/logout', 'LoginController@doLogout');// Logs the user out.	
	    
		
	Route::post('/profile', 'ProfileController@userProfile'); // Profile handler.
	

<<<<<<< Updated upstream
Route::post('/editUser', 'AdminController@updateUserProfile'); // Admin DeleteUser Functionality
=======
	Route::post('/portfolio', 'ProfileController@eportfolioProfile'); // Portfolio handler.
	

	Route::post('/updateProfile', 'ProfileController@updateProfile'); // Profile handler.
	
>>>>>>> Stashed changes

	Route::post('/deleteUser', 'AdminController@deleteUser'); // Admin DeleteUser Functionality
	

	Route::post('/editUser', 'AdminController@editUserProfile'); // Admin Edit User Functionality
	

<<<<<<< Updated upstream
=======
	Route::post('/adminUpdateProfile', 'AdminController@adminUpdateProfile'); // Admin Profile Update
	

	Route::post('/eprofile', 'ProfileController@eportfolioProfile'); // Portfolio handler.
	

	Route::post('/addGroup', 'ProfileController@addAffinity'); // 
	

	Route::post('/dologin', 'LoginController@index'); // Login handler.
	

	Route::post('/register', 'RegisterController@index'); // Registration handler.
	

	Route::post('/editJob', 'JobPostingController@editJob'); // Admin Edit Job Posting
	

	Route::post('/deleteJob', 'JobPostingController@deleteJob'); // Admin Edit Job Posting
	

	Route::post('/updateJob', 'JobPostingController@updateJob'); // Admin Update Job Posting
	

	Route::post('/createJob', 'JobPostingController@createJob'); // Admin Update Job Posting
>>>>>>> Stashed changes

