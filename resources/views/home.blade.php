<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php 
// A simple login and registration page for users.
?>
@extends('layouts.footer')
<head>
    <title>Home Page</title>
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
<div class="container">
	<h1> Welcome to Job Finder! </h1> 
	<a href="login" class="btn btn-dark">Login</a>
	<a href="registration" class="btn btn-dark">Register</a>
</div>
</body>
