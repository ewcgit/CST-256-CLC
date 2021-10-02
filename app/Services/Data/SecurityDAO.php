<?php // CST-256 page by team.

namespace App\Services\Data;

use App\Models\UserModel;

class SecurityDAO {
	// The default MAMP settings.
	private $mysql_host = "localhost";
	private $mysql_database = "cst-256";
	private $mysql_user = "root";
	private $mysql_password = "root";
	
	public function __construct() { // A constructor.
	}
	
	public function findByUser(UserModel $user) { // Returns user from database.
		$username = $user->getUsername();
		$password = $user->getPassword();
		
		// Creates an SQL connection.
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Checks the SQL connection.
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
		}
		
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
		
		// Creates an SQL connection.
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Checks the SQL connection.
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
		}
		
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
}