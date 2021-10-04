<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php // A simple page for logging in complete with @csrf token. ?>

@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')

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
@endsection