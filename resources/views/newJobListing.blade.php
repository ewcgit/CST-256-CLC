<?php  // CST-256 page by team.
use App\Http\Controllers\JobPostingController;

// Checking if a user is logged in
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
// Needed for page functionality.
// Creating a new job listing
?>
@extends('layouts.appmaster') 
@section('title', 'Edit Job')
@section('content')
	<div class="col-md-6">
		<h2>Job Listing</h2>
		<form action="createJob" method="post">
		@csrf
			<div class="form-group">
				<label>Job Company:</label>
				<input type="text" name="company" class="form-control" required><br>	
			</div>
			<div class="form-group">
				<label>Job Title:</label>
				<input type="text" name="jobTitle" class="form-control" required><br>	
			</div>
			<div class="form-group">
				<label>Job Type:</label>
				<input type="text" name="jobType" class="form-control" required><br>	
			</div>
			<div class="form-group">
				<label>Job Description:</label><br>
				<textarea name="jobDescription" class="text" cols="100" rows ="8" required></textarea>
			</div>
			<div class="form-group">
				<label>Job Status:</label>
				<input type="text" name="jobStatus" class="form-control" required><br>	
			</div>
			<div class="form-group">
				<label>Closing Date:</label>
				<input type="text" name="closingDate" class="form-control" required><br>	
			</div>
			
			<button type="submit" class="btn btn-primary">Create New Job Listing</button>
		</form>
	</div>

@endsection