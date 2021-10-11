<?php 
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
?>
@extends('layouts.appmaster')
@section('title', 'Affinity Groups')
@section('content')

                <p> You are not a member of any Affinity Groups. 
                	<br>Select an Infinity Group to Join.
                </p>
                <br><br>
                <form  action = 'addGroup' method = 'POST'>
                    Choose an Affinity Group:
                    @csrf
                    <select name="groupid" name="groupid">
                    <option value="1">Select...</option>
                    <option value="2">Education</option>
                    <option value="3">IT</option>
                    <option value="4">Law Enforcement</option>
                    <option value="7">Manufacturing</option>
                    </select>
                    <br>
                    <button type='submit'class='btn btn-primary'>Select</button>
                </form>                            

@endsection