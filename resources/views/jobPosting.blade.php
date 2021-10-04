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
</table>
  <?php mysqli_close($conn); // Close connection ?>

@endsection  












