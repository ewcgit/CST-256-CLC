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
            <form action="remove" method="get">
        		@csrf
    			<button name="removeMember" type="submit" class="btn btn-dark">Remove</button>
			</form>   
       
@endsection  