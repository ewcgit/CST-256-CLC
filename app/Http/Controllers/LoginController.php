<?php // CST-256 page by team.
namespace App\Http\Controllers;

// Resources for the login controller's functionality.
use Illuminate\Http\Request;
<<<<<<< Updated upstream
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use App\Services\Data\SecurityDAO;
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use App\Services\Data\SecurityDAO;
use App\Services\Utility\MyLogger3;
use Carbon\Exceptions\Exception;
>>>>>>> Stashed changes

class LoginController extends Controller {
	
    
    public $logger;
    
    public function __construct() 
    {
        $log = new MyLogger3();
        $this->logger = $log; 
    }
    public function index(Request $request) { // Using a data request.
		// Instantiating a new security service while setting username and password.
		$login = new SecurityService();
		$DAO = new SecurityDAO();
		$username = $request->input('username');
		$password = $request->input('password');
		
		// Binding to the userModel.
		try
		{
		    $userModel = new UserModel($username, $password);

<<<<<<< Updated upstream
		// Validating login 1 for valid 0 for invalid
		$validation = $login->login($userModel);
		$id = $DAO->getID($userModel);
		if ($validation == 1) {
			// $data = ['username' => $username];
			echo "<h1>Login Successful!! Welcome " . $username . ".</h1><br><br>";
			session(['loggedIn' => $validation]);
			session(['username' => $username]);
			session(['id' => $id]);
			return view("landingPage"); // Redirect for successful logins.
		}
		
		else {
			return view("loginFailed"); // Redirect for failed logins.
		}
	}
}
=======
    		// Validating login 1 for valid 0 for invalid
    		$validation = $login->login($userModel);
    		if ($validation == 1) {
    		    $id = $DAO->getID($userModel);
    		    $role = $DAO->getRole($userModel);
    		    $first_name = $DAO->getFirstName($userModel);
    			// $data = ['username' => $username];
    			session(['loggedIn' => $validation]);
    			session(['username' => $username]);
    			session(['id' => $id]);
    			session(['role' => $role]);
    			session(['first_name' => $first_name]);
    			$this->logger->info("Login Successful.");
    			$urole = ucfirst($role);
    			echo "<h1>$urole Login Successful!! Welcome "  . $first_name . ".</h1><br><br>";
    			if ($role == 'admin')
    			    return view("adminLandingPage");
    			else
    			    return view("landingPage"); // Redirect for successful logins.
    		}
    		
    		else {
    		    $this->logger->info("Login Failed.");
    			return Redirect::to('login'); // Redirect for failed logins.
    		}
		} catch (Exception $e) {$this->logger->info(e); }
	}
	public function doLogout()
	{
	    Auth::logout();
	    return Redirect::to('login');
	}
	
}

?>
>>>>>>> Stashed changes
