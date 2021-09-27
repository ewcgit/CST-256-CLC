<?php 
	use App\Http\Controllers\ProfileController;

	$controller = new ProfileController();
	$controller->userProfile();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinematic Station-1</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <style>
        .aboutMe {
            position: absolute;
            outline: outset;
            left: 52%;
            top: 64.2em;
            width: 26em;
        }
    </style>
</head>

<body>
    <header><img src="images/logo.png" alt="Site logo" style="margin-left:23.5%; width:434px;height:225px;"></header>
    <div class="topnav">
        <a class="active" href="dashboard">Home</a>
        <a href="News">News</a>
        <a href="Messages">Messages</a>
        <a href="profile">Profile</a>
        <a href="About">About</a>
        <a href="home">Logout</a>
	</div>
	
	<body>

<div class="col-md-6">
		<h2>User registration</h2>
		<form action="register" method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username?>" disabled><br>
				</div>
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="firstName" class="form-control" value="<?php echo $firstName?>" disabled><br>
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type="text" name="lastName" class="form-control" value="<?php echo $lastName?>" disabled><br>
			</div>	
			<div class="form-group">
				<label>Role:</label>
				<input type="text" name="role" class="form-control" value="<?php echo $role?>" disabled><br>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $phone?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>Street Number:</label>
				<input type="text" name="streetNumber" class="form-control" value="<?php echo $streetNumber?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>Street Name:</label>
				<input type="text" name="streetName" class="form-control" value="<?php echo $streetName?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>City:</label>
				<input type="text" name="city" class="form-control" value="<?php echo $city?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>State:</label>
				<input type="text" name="State" class="form-control" value="<?php echo $state?>" disabled><br><br>
			</div>
			<div class="form-group">
				<label>Zip Code:</label>
				<input type="text" name="zip" class="form-control" value="<?php echo $zip?>" disabled><br><br>
			</div>
			</form>
		</div>
</body>
</html>