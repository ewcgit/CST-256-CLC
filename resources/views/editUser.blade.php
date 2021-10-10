@extends('layouts.appmaster')
@section('title', 'Admin Panel')
@section('content')

<?php
	use App\Http\Controllers\AdminController;
	
	$id = $_GET['id'];
	$controller = new AdminController();
	$controller->updateUserProfile($id);
	
	//echo $id;
?>
@endsection