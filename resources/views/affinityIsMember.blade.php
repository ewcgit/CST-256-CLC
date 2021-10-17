<?php 
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
?>
@extends('layouts.appmaster')
@section('title', 'Affinity Groups')
@section('content')

	<h1 align=center>   You are a member of  {{ $groupName }}  </h1>
       
	<!-- Option to remove the user's affinity group -->
	<form action="remove" method="post">
		@csrf
		<button name="removeMember" type="submit" class="btn btn-dark">Remove Affinity</button>
	</form>   
       
@endsection  