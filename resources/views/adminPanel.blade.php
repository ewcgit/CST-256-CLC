<?php 
// Checking if a user is logged in
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}


?>

@extends('layouts.appmaster')
@section('title', 'Admin Panel')
@section('content')
<br>
	<form action='editUser' method='POST'>
		<label for='userID'>Enter an ID to Edit:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Edit User</button>
	</form>
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

<br>
	<form action='editJob' method='POST'>
		<label for='jobID'>Enter an ID to Edit:</label>
		<input id='jobID' name='jobID'>@csrf
		<button type='submit' class='btn btn-primary'>Edit Job</button>
	</form>
	<form action='deleteJob' method='POST'>
		<label for='jobID'>Enter an ID to Delete:</label>
		<input id='jobID' name='jobID'>@csrf
		<button type='submit' class='btn btn-primary'>Delete Job</button>
	</form>
	<form action='newjoblisting' method='GET'>
		<button type='submit' class='btn btn-primary'>Create New Job Listing</button>
	</form>
	<br>
	
	
@endsection
