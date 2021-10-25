<?php  // CST-256 page by team.
	// Checking if a user is logged in
	$loggedIn = session('loggedIn');
	if($loggedIn != 1) {
		Redirect::to('home')->send();
	}
	
	// Checking if a user is an admin
	$role = session('role');
	if($role != "admin") {
		Redirect::to('dashboard')->send();
	}
	// Needed for page functionality.
	// Edit Job page for Admins
?>
@extends('layouts.appmaster') 
@section('title', 'Edit Job')
@section('content')

	<div class="col-md-6">
		<h2>Job Listing</h2>
		<form action="updateJob" method="post">
		@csrf
			<div class="form-group">
				<label>ID:</label>
				<input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly><br>	
			</div>
			<div class="form-group">
				<label>Job Company:</label>
				<input type="text" name="company" class="form-control" value="<?php echo $company?>" required><br>	
			</div>
			<div class="form-group">
				<label>Job Title:</label>
				<input type="text" name="jobTitle" class="form-control" value="<?php echo $jobTitle?>" required><br>	
			</div>
			<div class="form-group">
				<label>Job Type:</label>
				<input type="text" name="jobType" class="form-control" value="<?php echo $jobType?>" required><br>	
			</div>
			<div class="form-group">
				<label>Job Description:</label><br>
				<textarea name="jobDescription" class="text" cols="100" rows ="8" required><?php echo $jobDescription?></textarea>
			</div>
			<div class="form-group">
				<label>Job Status:</label>
				<input type="text" name="jobStatus" class="form-control" value="<?php echo $jobStatus?>" required><br>	
			</div>
			<div class="form-group">
				<label>Closing Date:</label>
				<input type="text" name="closingDate" class="form-control" value="<?php echo $closingDate?>" required><br>	
			</div>
			
			<button type="submit" class="btn btn-primary">Save Changes</button>
		</form>
	</div>
@endsection