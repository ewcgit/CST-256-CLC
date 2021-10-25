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
           position:absolute;
           padding: 10px 10px 0px 10px;   
           bottom:0;
           width:100%;
        }
	  
    </style>
</head> 
<?php  // CST-256 page by team.
	use App\Http\Controllers\JobPostingController;

	// Needed for page functionality.
	// A stylish page for user information.
?>
@extends('layouts.appmaster') 
@section('title', 'Job Selected')
@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-dark" role="button" href="dashboard">Home</a>
        </li>
        <li class="nav-item">
          <form action="profile" method="post">
        	@csrf
    			<button name="userProfile" type="submit" class="btn btn-dark">Profile</button></form>
        </li>
        <li class="nav-item">
          <form action="portfolio" method="post">
        	@csrf
    		<button name="eportfolioProfile" type="submit" class="btn btn-dark">E-Portfolio</button></form>
        </li>
        <li class="nav-item">
          <form action="posting" method="get">
        	@csrf
    		<button name="jobposting" type="submit" class="btn btn-dark">Job Postings</button>
			</form>
        </li>
		<li class="nav-item">
          <form action="affinity" method="get">
        	@csrf
    		<button name="affinityMember" type="submit" class="btn btn-dark">Affinity Memberships</button>
			</form>  
        </li>
        <li>
        	<a href="logout" role="button" class="btn btn-dark">Logout</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>

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