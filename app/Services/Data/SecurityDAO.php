<?php // CST-256 page by team.

namespace App\Services\Data;

use App\Models\UserModel;
use App\Models\JobModel;

class SecurityDAO {
	public function __construct() { // A constructor.
	}
	
	public function findByUser(UserModel $user) { // Returns user from database.
		$username = $user->getUsername();
		$password = $user->getPassword();
		$conn = $this->getConnection();
		
		// SQL database query actions.
		$sql = "SELECT COUNT(*) AS 'total' FROM `ayugetdsmsvnoclz`.`users` WHERE `username`='$username' AND `password`='$password';";
		$result = mysqli_query($conn, $sql);
		$data=mysqli_fetch_assoc($result);
		$numOfRows = $data['total'];
		
		if ($numOfRows == 1) { // This only returns true if one row matches in the SQL database.
			return true;
		}
		else {
			return false;
		}
	}
	
	public function getID(UserModel $user) {
		$username = $user->getUsername();
		$password = $user->getPassword();
		$conn = $this->getConnection();
		
		$sql = "SELECT `id` FROM `users` WHERE `username` = '$username' AND `password` = '$password';";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
			while($row = $result->fetch_assoc()) {
				// Verifies each database variable.
				$id = $row["id"];
			}
		}
		
		return $id;
	}
	
	public function getRole(UserModel $user) {
		$username = $user->getUsername();
		$password = $user->getPassword();
		$conn = $this->getConnection();
		
		$sql = "SELECT `role` FROM `users` WHERE `username` = '$username' AND `password` = '$password';";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
			while($row = $result->fetch_assoc()) {
				// Verifies each database variable.
				$role = $row["role"];
			}
		}
		
		return $role;
	}
	
	public function getConnection() {
		// The default Server settings.
		$mysql_host = "vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		$mysql_database = "ayugetdsmsvnoclz";
		$mysql_user = "b3llbmr4b6zlqq6u";
		$mysql_password = "hzhywgc0en7ggepn";
		$mysql_port = "3306";
		
		// Creates an SQL connection.
		$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database, $mysql_port);
		
		// Checks the SQL connection.
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
		}
		
		return $conn;
	}
	
	public function getAllJobs() {
			$conn = $this->getConnection();
			$query = "SELECT * FROM job_posting ORDER BY Job_ID DESC";
			$query_run = mysqli_query($conn, $query);
			return $query_run;
	}
	
}