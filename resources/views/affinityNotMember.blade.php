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
           position:absolute;
           padding: 10px 10px 0px 10px;   
           bottom:0;
           width:100%;
        }
        #affinity
        {
            font-size: 25px;
        }
	  
    </style>
</head>  
<?php 
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
?>
>>>>>>> Stashed changes
@extends('layouts.appmaster')
@section('title', 'Affinity Groups')
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

              <div id="affinity"> 
                <br><br>
                <p> You are not a member of any Affinity Groups. 
                	<br>Select an Infinity Group to Join.
                </p>
                <br><br>
                <form  action = 'addGroup' method = 'POST'>
                    Choose an Affinity Group:
                    </div> 
                    @csrf
                    <select name="groupid" name="groupid">
                    <option value="1">Select...</option>
                    <option value="2">Education</option>
                    <option value="3">IT</option>
                    <option value="4">Law Enforcement</option>
                    <option value="7">Manufacturing</option>
                    </select>
                    <br>
                    <button type='submit'class='btn btn-primary'>Select</button>
                </form>                            

@endsection