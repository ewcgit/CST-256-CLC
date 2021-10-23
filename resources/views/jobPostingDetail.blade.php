<?php  // CST-256 page by team.
	use App\Http\Controllers\JobPostingController;

	// Needed for page functionality.
	// A stylish page for user information.
?>
@extends('layouts.appmaster') 
@section('title', 'Job Selected')
@section('content')

    	<h1 style="color:white"><?php echo $Company?></h1>
    	
    	<table class='table table-dark table-striped' border='1'>
        	<tr><th>JOB ID</th></tr>
        	<tr><td><?php echo $Job_ID?></td></tr>
        	<tr><th> Job Title</th></tr>
        	<tr><td><?php echo $Job_Title?></td></tr>
        	<tr><th>Job Type</th></tr>
        	<tr><td><?php echo $Job_Type?></td></tr>
        	<tr><th>Job Description</th></tr>
        	<tr><td><?php echo $Job_Description?></td></tr>
        	<tr><th>Job Status</th></tr>
        	<tr><td><?php echo $Job_status?></td></tr>
        	<tr><th>Closing Date</th></tr>
        	<tr><td><?php echo strtotime($Closing_Date)?></td></tr>
        </table>
@endsection