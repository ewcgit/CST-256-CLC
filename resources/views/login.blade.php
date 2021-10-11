<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php // A simple page for logging in complete with @csrf token. ?>
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
		<h2>User login</h2>
		<form action="dologin" method="POST">
		@csrf
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<button style="margin-top: 5px;" type="submit" class="btn btn-primary">Login</button>
		</form>
