<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->
<?php
// Starts and destroys the user session.
session()->flush();
?>
@extends('layouts.footer')
<head>
    <title>Logout Successful</title>
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
	<h1>Logout Successful</h1><br></br><br></br>
	<a href="home">Home</a>
</body>