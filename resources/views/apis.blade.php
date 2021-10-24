<?php 
// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}

?>
@extends('layouts.appmaster')
@section('title', 'APIs')
@section('content')
<br>
<ul class="list-group" align="left">
	<li>
		<a href="api/getjobs" class="btn btn-dark">Job Listing API</a>
	</li><br>
	<li>
		<a href="api/getaffinitygroups" class="btn btn-dark">Affinity Groups API</a>
	</li><br>
	<li>
		<a href="api/getportfolios" class="btn btn-dark">User Portfolios API</a>
	</li><br>
	<?php 
        // Checking if a user is an admin
        $role = session('role');
        if($role == "admin") {
        	echo '<li>
          	<a href="api/getusers" class="btn btn-dark">Users API</a>
        	</li>';
        }
	?>

</ul>	

@endsection