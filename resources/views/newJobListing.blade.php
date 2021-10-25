
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
use App\Http\Controllers\JobPostingController;

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
// Creating a new job listing
?>
@extends('layouts.appmaster') 
@section('title', 'Edit Job')
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