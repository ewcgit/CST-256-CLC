<?php // CST-256 page by team.
namespace App\Http\Controllers;

// Resources for the login controller's functionality.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\Exception;
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use App\Services\Data\SecurityDAO;
use App\Services\Utility\MyLogger3;

class LoginController extends Controller {
	public function index(Request $request) { // Using a data request.
		try { 
		// Instantiating a new security service while setting username and password.
		$login = new SecurityService();
		$DAO = new SecurityDAO();
		$logger = new MyLogger3();
		$username = $request->input('username');
		$password = $request->input('password');
		
		// Binding to the userModel.
		$userModel = new UserModel($username, $password);

		// Validating login 1 for valid 0 for invalid
		$validation = $login->login($userModel);
		$id = $DAO->getID($userModel);
		$role = $DAO->getRole($userModel);
		if ($validation == 1) {
			// $data = ['username' => $username];
			echo "<h1>Login Successful!! Welcome " . $username . ".</h1><br><br>";
			session(['loggedIn' => $validation]);
			session(['username' => $username]);
			session(['id' => $id]);
			session(['role' => $role]);
			$logger->info("Login Successful.");
			
			return view("landingPage"); // Redirect for successful logins.
		}
		
		else {
			$logger->info("Login Successful.");
			return view("loginFailed"); // Redirect for failed logins.
		}
		}
		catch (Exception $e) {
			$logger->error($e);
		}
	}
}

?>