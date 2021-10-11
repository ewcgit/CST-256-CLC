<?php // CST-256 page by team.
// A simple page to announce failed user registration. ?>
@extends('layouts.footer')
<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    body, html {
    height: 100%;
    font-family: Montserrat-Regular, sans-serif;
    background-color: #22577A;
	}
    </style>
</head>

<body>
	<h1>Registration Failed</h1><br><br>
	<h1>Error Code: <?php // Returns an error code.
	echo $error?></h1>
		
	<a href="register">Return to Registration</a>
</body>