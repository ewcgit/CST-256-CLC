@extends('layouts.appmaster')
@section('title', 'Job Posting Page')
@section('content')

	<br>
	<form action='selectJob' method='POST'>
		<label  style="color:white" for='job'><b>Enter an ID of the job for more details:</b></label>
		<input id='job' name='job'>@csrf
		<button type='submit' class='btn btn-primary'>Select Job</button>
	</form>
<?php // CST-256 page by team.
	use App\Http\Controllers\JobPostingController;
	$controller = new JobPostingController();
	$controller->jobPostingsAll();
?>
	
	
@endsection