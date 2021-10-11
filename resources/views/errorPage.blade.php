<?php 
// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}

?>
@extends('layouts.appmaster')
@section('title', 'Error Page')
@section('content')
<h1>Error Encountered!!!</h1><br><br>
<h1>Error Code: <?php // Returns an error code.
echo $error?></h1>
		
		<a href="dashboard">Return to Dashboard</a>
	</body>
</html>
@endsection