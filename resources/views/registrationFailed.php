<?php // CST-256 page by team.
// A simple page to announce failed user registration. ?>

<html>
	<head>
		<title>Registration Failed</title>	
	</head>

	<body>
		<h1>Registration Failed</h1><br><br>
		<h1>Error Code: <?php // Returns an error code.
		echo $error?></h1>
		
		<a href="register">Return to Registration</a>
	</body>
</html>