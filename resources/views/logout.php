<?php
session_start();
session_destroy();
header('location:login.php'); // Returns the user to login again.

?>

<html>

	<h1>Logout Successful</h1><br><br>
	
	<a href="home">Home</a>


</html>