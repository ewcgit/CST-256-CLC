<?php // Page by Elijah.
session_start(); // Creates the session.

$con = mysqli_connect('localhost', 'root', ''); // Credentials using XAMPP.

mysqli_select_db($con, 'userregistration'); // Connects to SQL database.

$name = $_POST['user']; // Gets the username.
$pass = $_POST['password']; // Gets the password.

// Query.
$s = " SELECT * FROM usertable where name = '$name' && password = '$pass'";

// Needs to verify they are in the table.
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result); // For the number of rows returned.

if($num == 1){ // If there is a matching row in the SQL database.
    $_SESSION['username'] = $name;
    header('location:home.php'); // Successfully validated the login.
}
else{
    header('location:login.php'); // For all failed login redirections.
}

?>