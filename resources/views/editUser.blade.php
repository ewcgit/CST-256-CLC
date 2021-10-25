<<<<<<< Updated upstream
=======
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <style>
        body, html {
            height: 100%;
            font-family: Montserrat-Regular, sans-serif;
            background-color: #22577A;
            color: #FFF1E1;
        }
        
        #banner{
                font-family: Georgia, serif;
                font-size: 25px;
                letter-spacing: 1.6px;
                word-spacing: 2px;
                color: #FFF1E1;
                font-weight: 700;
                font-style: italic;
                font-variant: small-caps;
                text-align:center;
        }
        img{
                display: block;
                margin-left: auto;
                margin-right: auto;
        }
        
        footer {

           padding: 10px 10px 0px 10px;   
           bottom:0;
           width:100%;
        }
	  
    </style>
</head>  
<?php  // CST-256 page by team.
use App\Http\Controllers\ProfileController;
// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
?>

>>>>>>> Stashed changes
@extends('layouts.appmaster')
@section('title', 'Admin Panel')
@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-dark" role="button" href="dashboard">Home</a>
        </li>

        <li class='nav-item'>
          	<form action='adminpanel' method='get'>
    		<button name='adminPanel' type='submit' class='btn btn-dark'>Admin Panel</button>
			</form>
        </li>
        <li>
        	<a href="logout" role="button" class="btn btn-dark">Logout</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>

<<<<<<< Updated upstream
<?php
	use App\Http\Controllers\AdminController;
	
	$id = $_GET['id'];
	$controller = new AdminController();
	$controller->updateUserProfile($id);
	
	//echo $id;
?>
@endsection
=======
<div class="col-md-6">
		<h2>User Profile</h2>
		<form action="adminUpdateProfile" method="post">
		@csrf
		<div class="form-group">
				<label>ID:</label>
				<input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly><br>
				</div>
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username?>" required><br>
				</div>
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="firstName" class="form-control" value="<?php echo $firstName?>" required><br>
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type="text" name="lastName" class="form-control" value="<?php echo $lastName?>" required><br>
			</div>	
			<div class="form-group">
				<label>Role:</label>
				<input type="text" name="role" class="form-control" value="<?php echo $role?>" required><br>
			</div>
			<div class="form-group">
				<label>Affinity:</label>
				<input type="text" name="affinity" class="form-control" value="<?php echo $affinity?>" required><br>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email?>" required><br><br>
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $phone?>" required><br><br>
			</div>
			<div class="form-group">
				<label>Street Number:</label>
				<input type="text" name="streetNumber" class="form-control" value="<?php echo $streetNumber?>" required><br><br>
			</div>
			<div class="form-group">
				<label>Street Name:</label>
				<input type="text" name="streetName" class="form-control" value="<?php echo $streetName?>" required><br><br>
			</div>
			<div class="form-group">
				<label>City:</label>
				<input type="text" name="city" class="form-control" value="<?php echo $city?>" required><br><br>
			</div>
			<div class="form-group">
				<label>State:</label>
				<input type="text" name="state" class="form-control" value="<?php echo $state?>" required><br><br>
			</div>
			<div class="form-group">
				<label>Zip Code:</label>
				<input type="text" name="zip" class="form-control" value="<?php echo $zip?>" required><br><br>
			</div>
			<button type="submit" class="btn btn-primary">Save Changes</button>
			</form>
		</div>
		
@endsection
>>>>>>> Stashed changes
