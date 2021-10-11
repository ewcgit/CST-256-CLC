<?php  // CST-256 page by team.
use App\Http\Controllers\ProfileController;

// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}

// A stylish page for user information.
?>
@extends('layouts.appmaster')
@section('title', 'Edit User Profile')
@section('content')

<div class="col-md-6">
		<h2>User Profile</h2>
		<form action="updateProfile" method="post">
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