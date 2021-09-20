<?php // Page by Elijah. ?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
</body>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6">
		<h2>User login</h2>
		<form action="/loginSuccess" method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="user" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		
		</div>
	</div>
</div>
</body>
</html>