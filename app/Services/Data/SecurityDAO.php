<?php

namespace App\Services\Data;

use App\Models\UserModel;

class SecurityDAO {
	private $mysql_host = "localhost";
	private $mysql_database = "cst-256";
	private $mysql_user = "root";
	private $mysql_password = "root";
	
	public function __construct() {
		
	}
	
	
	
	public function findByUser(UserModel $user) {
		$username = $user->getUsername();
		$password = $user->getPassword();
		
		// Create connection
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT COUNT(*) AS 'total' FROM `cst-256`.`users` WHERE `username`='$username' AND `password`='$password';";
		
		$result = mysqli_query($conn, $sql);
		
		$data=mysqli_fetch_assoc($result);
		$numOfRows = $data['total'];
		
		if ($numOfRows == 1) {
			return true;
		}
		else {
			return false;
		}
	}
	
	
}

