<?php // CST-256 page by team.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\SecurityDAO;

class RegisterController extends Controller {
	
	public function index(Request $request) { // Data request used for the index.
		// Binds each database variable.
		$username = $request->input('username');
		$password = $request->input('password');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$streetNumber = $request->input('streetNumber');
		$streetName = $request->input('streetName');
		$city = $request->input('city');
		$state = $request->input('state');
		$zip = $request->input('zip');
		
		// Performing validation on inputted username and password
		$this->validateForm($request);
		$DAO = new SecurityDAO();
		
		//Create new Connection
		$conn = $DAO->getConnection();

		$sql = "INSERT INTO `users` (`username`, `password`, `email`, `first_name`, `last_name`, `phone`, `street_number`, `street_name`, `city`, `state`, `zip`)
			VALUES ('$username', '$password', '$email', '$firstName', '$lastName', '$phone', '$streetNumber', '$streetName', '$city', '$state', '$zip');";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>Registration Successful! Please log in.</h1>";
			return view("login"); // Redirect for successful login.
		} else {
			$error = mysqli_error($conn);
			$data = ['error' => $error];
			return view("registrationfailed")->with($data); // Redirect for failed login.
		}	
	}
	
	private function validateForm(Request $request)
	{
		// Setup Data Validation Rules for Login Form
		$rules = ['username' => 'Required | Between:4,20',
				'password' => 'Required | Between:4,25'];
		
		// Run Data Validation Rules
		$this->validate($request, $rules);
	}
	
}