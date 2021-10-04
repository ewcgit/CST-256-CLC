<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cinematic Station-1</title>
<link rel="stylesheet" type="text/css" href="../../public/css/app.css">
<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
<style>
.aboutMe {
    position: absolute;
    outline: outset;
    left: 52%;
    top: 64.2em;
    width: 26em;
}
</style>
</head>

<body>
<header><img src="images/logo.png" alt="Site logo" style="margin-left:23.5%; width:434px;height:225px;"></header>
<div class="topnav">
<a class="active" href="dashboard">Home</a>
<a href="News">News</a>
<a href="Messages">Messages</a>
<a href="profile">Profile</a>
<a href="About">About</a>
<a href="home">Logout</a>
</div>

<table>
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
  
  </body>
  </html>  












