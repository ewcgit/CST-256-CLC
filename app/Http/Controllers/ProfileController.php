<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
	private $mysql_host = "localhost";
	private $mysql_database = "cst-256";
	private $mysql_user = "root";
	private $mysql_password = "root";
	
	public function adminPanel() {
		// Create connection
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM `users`;";
		
		$result = $conn->query($sql);
		
		echo "<h1>Current Users</h1>";
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			echo "<table border='1'><tr><th>Item ID</th><th>Username</th><th>Email</th><th>Role</th></tr>";
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
	
	public function userProfile() {
		$username = session('username');
		
		// Create connection
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM `users` WHERE `username` = '$username';";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
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
			echo "</table>";
		}
		
		$data = ['username' => $username, 'id' => $id, 'firstName' => $firstName, 'lastName' => $lastName, 'role' => $role, 'email' => $email, 'phone' => $phone, 'streetNumber' => $streetNumber,
				'streetName' => $streetName, 'city' => $city, 'state' => $state, 'zip' => $zip];
		return view("userprofile")->with($data);
	}

	
}