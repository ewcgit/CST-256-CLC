<?php // CST-256 page by team.
namespace App\Http\Controllers;

// Resources for the login controller's functionality.
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use SessionHandler;
use Illuminate\Contracts\Session\Session;
use Illuminate\Session\Middleware\StartSession;

class LoginController extends Controller {
	public function index(Request $request) { // Using a data request.
		// Instantiating a new security service while setting username and password.
		$login = new SecurityService();
		$username = $request->input('username');
		$password = $request->input('password');
		
		// Binding to the userModel.
		$userModel = new UserModel($username, $password);

		// Validating login 1 for valid 0 for invalid
		$validation = $login->login($userModel);
		if ($validation == 1) {
			// $data = ['username' => $username];
			echo "<h1>Login Successful!! Welcome " . $username . ".</h1><br><br>";
			session(['loggedIn' => $validation]);
			session(['username' => $username]);
			return view("landingpage"); // Redirect for successful logins.
		}
		
		else {
			return view("loginfailed"); // Redirect for failed logins.
		}
		

	}
}