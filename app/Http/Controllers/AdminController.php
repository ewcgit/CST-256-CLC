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
}