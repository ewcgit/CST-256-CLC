<?php use Illuminate\Auth\Events\Login;
use App\Http\Controllers\LoginController;

// CST-256 page by team.
// A page for user logins.
// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}
?>
@extends('layouts.appmaster')
@section('title', 'Dashboard')
@section('content')
@endsection