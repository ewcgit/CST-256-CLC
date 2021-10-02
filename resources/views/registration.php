<!-- CST-256 CLC Project Version 1.0 Page Created by Casey Huz -->
<?php // A simple page to capture a user's desired information.
// No csrf token here. ?>

<html>

<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>

<body>

<div class="col-md-6">
		<h2>User registration</h2>
		<form action="register" method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="user" class="form-control" required><br>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required><br>
			</div>
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="firstName" class="form-control" required><br>
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type="text" name="lastName" class="form-control" required><br>
			</div>	
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type="text" name="phone" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>Street Number:</label>
				<input type="text" name="streetNumber" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>Street Name:</label>
				<input type="text" name="streetName" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>City:</label>
				<input type="text" name="city" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>State:</label>
				<input type="text" name="State" class="form-control" required><br><br>
			</div>
			<div class="form-group">
				<label>Zip Code:</label>
				<input type="text" name="zip" class="form-control" required><br><br>
			</div>
				
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
</body>
</html>