<?php // CST-256 page by team.

namespace App\Services\Data;

use App\Models\UserModel;

class SecurityDAO {
	public function __construct() { // A constructor.
	}
	
	public function findByUser(UserModel $user) { // Returns user from database.
		$username = $user->getUsername();
		$password = $user->getPassword();
		$conn = $this->getConnection();
		
		// SQL database query actions.
		$sql = "SELECT COUNT(*) AS 'total' FROM `cst-256`.`users` WHERE `username`='$username' AND `password`='$password';";
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
	
	public function getConnection() {
		// The default MAMP settings.
		$mysql_host = "ec2-52-71-161-140.compute-1.amazonaws.com";
		$mysql_database = "dfdopcps97q49f";
		$mysql_user = "uetwxcsuqfuyao";
		$mysql_password = "5b127b8944e2a6033392cfd0b2d6bc50b9c9895a5326041349d32338a73d34f8";
        $mysql_port = 5432;
		
		// Creates an SQL connection.
		$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database, $mysql_port);
		
		// Checks the SQL connection.
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
		}
		
		return $conn;
	}
	
}
