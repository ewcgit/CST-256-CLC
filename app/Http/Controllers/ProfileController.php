<?php // CST-256 page by team.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\SecurityDAO;

class ProfileController extends Controller {	
	public function userProfile() {
		$username = session('username');
		$DAO = new SecurityDAO();
		
		//Create new Connection
		$conn = $DAO->getConnection();
		
		$sql = "SELECT * FROM `users` WHERE `username` = '$username';"; // User query.
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
			while($row = $result->fetch_assoc()) {
				// Verifies each database variable.
				$id = $row["id"];
				$firstName = $row["first_name"];
				$lastName = $row["last_name"];
				$role = $row["role"];
				$email = $row["email"];
				$phone = $row["phone"];
				$streetNumber = $row["street_number"];
				$streetName = $row["street_name"];
				$city = $row["city"];
				$state = $row["state"];
				$zip = $row["zip"];
			}
		}
		
		$data = ['username' => $username, 'id' => $id, 'firstName' => $firstName, 'lastName' => $lastName, 'role' => $role, 'email' => $email, 'phone' => $phone, 'streetNumber' => $streetNumber,
				'streetName' => $streetName, 'city' => $city, 'state' => $state, 'zip' => $zip];
		return view("userprofile")->with($data); // Sends results to userprofile view.
	}

	// Function to update user profile
	public function updateProfile(Request $request) {
		// Assigning data from fields to variables
		$username = $request->input('username');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$role = $request->input('role');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$streetNumber = $request->input('streetNumber');
		$streetName = $request->input('streetName');
		$city = $request->input('city');
		$state = $request->input('state');
		$zip = $request->input('zip');
		$id = session('id');
		$DAO = new SecurityDAO();
		
		//Create new Connection
		$conn = $DAO->getConnection();

		$sql = "UPDATE `users` SET `username` = '$username', `email` = '$email', `first_name` = '$firstName',
		`last_name` = '$lastName', `phone` = '$phone', `street_number` = '$streetNumber', `street_name` = '$streetName', 
		`city` = '$city', `state` = '$state', `zip` = '$zip' WHERE `id` = '$id';";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>Profile Updated</h1><br>";
			return view("landingpage");
		} else {
			$error = mysqli_error($conn);
			$data = ['error' => $error];
			return view("registrationfailed")->with($data); // Redirect for failed Update
		}
	}
	
}