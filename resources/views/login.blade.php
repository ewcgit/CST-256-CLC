<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<html>
<head>
	<title>Login</title>
</head>
</body>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6">
		<h2>User login</h2>
		<form action="dologin" method="POST">
		@csrf
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password:</label>
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