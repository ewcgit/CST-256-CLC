<<<<<<< Updated upstream
<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php 
// A simple login and registration page for users.
?>
@extends('layouts.appmaster')
@section('title', 'Welcome Page')
@section('content')


<div class="container">
	<h1> Welcome to Job Finder! </h1> 
	<a href="login" class="btn btn-dark">Login</a>
	<a href="registration" class="btn btn-dark">Register</a>
</div>

@endsection
=======
<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini 
    A simple login and registration page for users.-->
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title>Milestone</title>
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


@extends('layouts.appmaster')
@section('title', 'Home')
@section('content')
    <div class="container">
		<br><br><br>    	
    	<h1> Welcome to Job Finder! </h1> 
    	<br><br>
    	<a href="login" class="btn btn-dark">Login</a>
    	<a href="registration" class="btn btn-dark">Register</a>
    </div>
@stop
>>>>>>> Stashed changes
