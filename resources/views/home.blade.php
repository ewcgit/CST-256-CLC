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
