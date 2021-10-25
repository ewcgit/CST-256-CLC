<<<<<<< Updated upstream
<?php ?>
@extends('layouts.appmaster')
@section('title', 'Job Postings')
@section('content')

<table class="table table-dark table-striped">
	<tr>
		<th>Job ID</th>
		<th>Company</th>
		<th>Job Title</th>
		<th>Job Type</th>
		<th>Job Description</th>
		<th>Job Status</th>
		<th>Closing Date</th>
	</tr>
=======
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <style>
        body, html {
            height: 100%;
            font-family: Montserrat-Regular, sans-serif;
            background-color: #22577A;
            color: #FFF1E1;
        }
        
        #banner{
                font-family: Georgia, serif;
                font-size: 25px;
                letter-spacing: 1.6px;
                word-spacing: 2px;
                color: #FFF1E1;
                font-weight: 700;
                font-style: italic;
                font-variant: small-caps;
                text-align:center;
        }
        img{
                display: block;
                margin-left: auto;
                margin-right: auto;
        }
        
        footer {
           padding: 10px 10px 0px 10px;   
           bottom:0;
           width:100%;
        }
	  
    </style>
</head>  
>>>>>>> Stashed changes

<?php
use App\Services\Data\SecurityDAO;

    $DAO = new SecurityDAO();
    
    //Create new Connection
    $conn = $DAO->getConnection();
    
    $sql = "SELECT * FROM `job_posting`;"; // Select all job postins
    $result = $conn->query($sql);
    
    while ($data = mysqli_fetch_array($result))
    {
    ?>  
    <tr>
    	<td> <?php echo $data['Job_ID']; ?></td> 
    	<td> <?php echo $data['Company']; ?></td> 
    	<td> <?php echo $data['Job_Title']; ?></td> 
    	<td> <?php echo $data['Job_Type']; ?></td> 
    	<td> <?php echo $data['Job_Description']; ?></td> 
    	<td> <?php echo $data['Job_status']; ?></td> 
    	<td> <?php echo $data['Closing_Date']; ?></td> 
    </tr>
<?php
    }
?>
<<<<<<< Updated upstream
</table>
  <?php mysqli_close($conn); // Close connection ?>

@endsection  












=======
@extends('layouts.datatables')
@section('title', 'Job Posting Page')
@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-dark" role="button" href="dashboard">Home</a>
        </li>
        <li class="nav-item">
          <form action="profile" method="post">
        	@csrf
    			<button name="userProfile" type="submit" class="btn btn-dark">Profile</button></form>
        </li>
        <li class="nav-item">
          <form action="portfolio" method="post">
        	@csrf
    		<button name="eportfolioProfile" type="submit" class="btn btn-dark">E-Portfolio</button></form>
        </li>
        <li class="nav-item">
          <form action="posting" method="get">
        	@csrf
    		<button name="jobposting" type="submit" class="btn btn-dark">Job Postings</button>
			</form>
        </li>
		<li class="nav-item">
          <form action="affinity" method="get">
        	@csrf
    		<button name="affinityMember" type="submit" class="btn btn-dark">Affinity Memberships</button>
			</form>  
        </li>
        <li>
        	<a href="logout" role="button" class="btn btn-dark">Logout</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>
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
>>>>>>> Stashed changes
