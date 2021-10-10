<?php // CST-256 page by team.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\SecurityDAO;

class AdminController extends Controller {
	public function adminPanel() {
		$DAO = new SecurityDAO();
		
		$conn = $DAO->getConnection();
		
		$sql = "SELECT * FROM `users`;";
		
		$result = $conn->query($sql);
		
		echo "<h1>Current Users</h1>";
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			echo "<table class='table table-dark table-striped' border='1'><tr><th>Item ID</th><th>Username</th><th>Email</th><th>Role</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["role"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
	}
	
	// Function to delete users from the database
	public function deleteUser(Request $request) {
		$id = $request->input('userID');
		$DAO = new SecurityDAO();
		// Creating a new connection.
		$conn = $DAO->getConnection();
		// Creating the SQL statement
		$sql = "DELETE FROM `users` WHERE `id` = '$id';";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>User Deleted Successfully!</h1><br>";
			return view("adminPanel");
		} 
		else {
			$error = mysqli_error($conn);
			$data = ['error' => $error];
			return view("errorPage")->with($data); // Redirect for failed Update
		}
	}
	
	public function updateUserProfile(Request $request) {
		$id = $request->input('userID');
		$DAO = new SecurityDAO();
		
		//Create new Connection
		$conn = $DAO->getConnection();
		
		$sql = "SELECT * FROM `users` WHERE `id` = '$id';"; // User query.
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
			while($row = $result->fetch_assoc()) {
				// Verifies each database variable.
				$id = $row["id"];
				$username = $row["username"];
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
		return view("userProfile")->with($data); // Sends results to userprofile view.
	}
}