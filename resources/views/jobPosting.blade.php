<?php
use App\Services\Data\SecurityDAO;

	// Checking if a user is logged in
	$loggedIn = session('loggedIn');
	if($loggedIn != 1) {
		Redirect::to('home')->send();
	}
	
	$DAO = new SecurityDAO();
	$query_run = $DAO->getAllJobs();
?>
@extends('layouts.datatables')
@section('title', 'Job Posting Page')
@section('content')
<html>
	<div class="table-responsive" >
		<div class="jumbotron">
			<div class="card">
				<h2>Job Postings</h2>
			</div>
			
			<div class="card">
				<div class="card-body">
					<table id="datatableid" class='table table-dark table-striped' border='1' width=100%>
					  <thead>
						<tr>
						  <th scope="col">Job ID</th>
						  <th scope="col">Company</th>
						  <th scope="col">Job Title</th>
						  <th scope="col">Job Type</th>
						  <th scope="col">Job Description</th>
						  <th scope="col">Job Status</th>
						  <th scope="col">Closing Date</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
						if($query_run){
							foreach($query_run as $row){
						?>
						<tr>
						  <td><?php echo $row["Job_ID"]; ?></td>
						  <td><?php echo $row["Company"]; ?></td>
						  <td><?php echo $row["Job_Title"]; ?></td>
						  <td><?php echo $row["Job_Type"]; ?></td>
						  <td><?php echo $row["Job_Description"]; ?></td>
						  <td><?php echo $row["Job_status"]; ?></td>
						  <td><?php echo $row["Closing_Date"]; ?></td>
						</tr>
						  <?php
							}?>
						</tbody>
						<?php }
						else{
							echo "No jobs posted yet!";
						}
					  ?>
					</table>
				</div>
			</div>
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<!-- "order": [[ 0, "desc" ]] will make it automatically sort by newest descending -->
<!-- However, it breaks pagination and searching for now. -->
<script>
$(document).ready(function() {
    $('#datatableid').DataTable({
		"pagingType": "full_numbers",
		"lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
		],
		responseive: true,
		"sDom": '<"top"lfip>rt',
		language: {
			search: "_INPUT_",
			searchPlaceholder: "Search Jobs",
		}
	});
} );
</script>
</html>
@endsection