

@extends('layouts.appmaster')
@section('title', 'Admin Panel')
@section('content')
<br>
	<form action='editUser' method='POST'>
		<label for='userID'>Enter an ID to Edit:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Edit User</button>
	</form>
	<br>
	<form action='deleteUser' method='POST'>
		<label for='userID'>Enter an ID to Delete:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Delete User</button>
	</form>
	<br>
<?php // CST-256 page by team.
	use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

	$controller = new AdminController();
	$controller->adminPanel();
?>
	
	
@endsection
