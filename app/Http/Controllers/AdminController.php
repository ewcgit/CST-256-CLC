<?php // CST-256 page by team.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\SecurityDAO;

class AdminController extends Controller {
	public function adminPanel() {
		$DAO = new SecurityDAO();
		// Section for printing out users
		$conn = $DAO->getConnection();
		$sql = "SELECT * FROM `users`;";
		$result = $conn->query($sql);
		
		echo "<h1>Current Users</h1>";
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			echo "<table class='table table-dark table-striped' border='1'><tr><th>Item ID</th><th>Username</th><th>Email</th><th>Role</th><th>Affinity</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["role"]."</td><td>".$row["affinity"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		
		// Section for printing out affinity groups
		$conn = $DAO->getConnection();
		$sql = "SELECT * FROM `affinity`;";
		$result = $conn->query($sql);
		
		echo "<h1>Current Affinity Groups</h1>";
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			echo "<table class='table table-dark table-striped' border='1'><tr><th>Group ID</th><th>Group Name</th><th>Group Description</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["groupID"]."</td><td>".$row["Group Name"]."</td><td>".$row["Group Description"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		
		// Section for printing out job listings
		$conn = $DAO->getConnection();
		$sql = "SELECT * FROM `job_posting`;";
		$result = $conn->query($sql);
		
		echo "<h1>Current Job Listings</h1>";
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			echo "<table class='table table-dark table-striped' border='1'><tr><th>Job ID</th><th>Company</th><th>Job Title</th><th>Job Type</th>
			<th>Job Status</th><th>Closing Date</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["Job_ID"]."</td><td>".$row["Company"]."</td><td>".$row["Job_Title"]."</td><td>".$row["Job_Type"]."</td>
				<td>".$row["Job_status"]."</td><td>".$row["Closing_Date"]."</td></tr>";
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
	
	// Function to update the selected user's profile
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
	
	public function editUserProfile(Request $request) {
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
				$affinity = $row["affinity"];
				$email = $row["email"];
				$phone = $row["phone"];
				$streetNumber = $row["street_number"];
				$streetName = $row["street_name"];
				$city = $row["city"];
				$state = $row["state"];
				$zip = $row["zip"];
			}
		}
		
		$data = ['username' => $username, 'id' => $id, 'firstName' => $firstName, 'lastName' => $lastName, 'role' => $role, 'affinity' => $affinity, 
				'email' => $email, 'phone' => $phone, 'streetNumber' => $streetNumber, 'streetName' => $streetName, 'city' => $city, 'state' => $state, 'zip' => $zip];
		return view("editUser")->with($data); // Sends results to userprofile view.
	}
	
	// Function to update user profile
	public function adminUpdateProfile(Request $request) {
		// Assigning data from fields to variables
		$username = $request->input('username');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$role = $request->input('role');
		$affinity = $request->input('affinity');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$streetNumber = $request->input('streetNumber');
		$streetName = $request->input('streetName');
		$city = $request->input('city');
		$state = $request->input('state');
		$zip = $request->input('zip');
		$id = $request->input('id');
		$DAO = new SecurityDAO();
		
		//Create new Connection
		$conn = $DAO->getConnection();
		
		$sql = "UPDATE `users` SET `username` = '$username', `email` = '$email', `first_name` = '$firstName',
		`last_name` = '$lastName', `role` = '$role', `affinity` = '$affinity', `phone` = '$phone', `street_number` = '$streetNumber', `street_name` = '$streetName',
		`city` = '$city', `state` = '$state', `zip` = '$zip' WHERE `id` = '$id';";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>Profile Updated</h1><br>";
			return view("landingPage");
		} else {
			$error = mysqli_error($conn);
			$data = ['error' => $error];
			return view("errorPage")->with($data); // Redirect for failed Update
		}
	}
}