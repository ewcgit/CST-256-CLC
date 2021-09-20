<?php
// Programming by Elijah.
session_start(); // Creates the session.
if(!isset($_SESSION['username'])){
    //header('location:login'); // Forces user to login screen if no credentials set.
	redirect('login');
}

?>

<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1> Welcome <?php //echo $_SESSION['username']; ?> </h1> 
<a href="login">Login</a>
<a href="registration">Register</a>
</div>
</body>
</html>