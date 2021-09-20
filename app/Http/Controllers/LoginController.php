<?php
namespace App\Http\Controllers;
include 'Controller.php';

class LoginController extends Controller
{
  public function test() {
  	echo "Hello World from Test Controller";
  }
  
  public function newConnection() {
  	$mysql_host = "localhost";
  	$mysql_database = "cst-323";
  	$mysql_user = "root";
  	$mysql_password = "root";
  	
  	// Create connection
  	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
  	
  	// Check connection
  	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
  	}
  	
  	return $conn;
  }
  
  public function validateLogin() {
  	
  	return view('loginSuccess');
  	
  }
  

}