<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php
// Starts and destroys the user session.
session_start();
session_destroy();
?>
@extends('layouts.appmaster')
@section('title', 'Logout')
@section('content')

	<h1>Logout Successful</h1><br></br><br></br>
	<a href="home">Home</a>
	
@endsection