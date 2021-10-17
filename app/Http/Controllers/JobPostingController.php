<?php 

namespace App\Http\Controllers;
use App\Services\Data\SecurityDAO;
use Illuminate\Http\Request;

class JobPostingController extends Controller {
    
    public function editJob(Request $request) {
    	$id = $request->input('jobID');
    	$DAO = new SecurityDAO();
    	
    	//Create new Connection
    	$conn = $DAO->getConnection();
    	
    	$sql = "SELECT * FROM `job_posting` WHERE `Job_ID` = '$id';"; // User query.
    	$result = $conn->query($sql);
    	
    	if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
    		while($row = $result->fetch_assoc()) {
    			// Verifies each database variable.
    			$id = $row["Job_ID"];
    			$company = $row["Company"];
    			$jobTitle = $row["Job_Title"];
    			$jobType = $row["Job_Type"];
    			$jobDescription = $row["Job_Description"];
    			$jobStatus = $row["Job_status"];
    			$closingDate = $row["Closing_Date"];  	
    		}
    	}
    	
    	$data = ['id' => $id, 'company' => $company, 'jobTitle' => $jobTitle, 'jobType' => $jobType, 'jobDescription' => $jobDescription,
    			'jobStatus' => $jobStatus, 'closingDate' => $closingDate];
    	return view("editJob")->with($data); // Sends results to userprofile view.
    }
    
    // Function to update user profile
    public function updateJob(Request $request) {
    	// Assigning data from fields to variables
    	$id = $request->input('id');
    	$company = $request->input('company');
    	$jobTitle = $request->input('jobTitle');
    	$jobType = $request->input('jobType');
    	$jobDescription = $request->input('jobDescription');
    	$jobStatus = $request->input('jobStatus');
    	$closingDate = $request->input('closingDate');
    	
    	$DAO = new SecurityDAO();
    	
    	//Create new Connection
    	$conn = $DAO->getConnection();
    	
    	$sql = "UPDATE `job_posting` SET `Company` = '$company', `Job_Title` = '$jobTitle', `Job_Type` = '$jobType', `Job_Description` = '$jobDescription',
		`Job_status` = '$jobStatus', `Closing_Date` = '$closingDate' WHERE `Job_ID` = '$id';";
    	
    	if (mysqli_query($conn, $sql)) {
    		echo "<h1>Job Listing Updated</h1><br>";
    		return view("landingPage");
    	} else {
    		$error = mysqli_error($conn);
    		$data = ['error' => $error];
    		return view("errorPage")->with($data); // Redirect for failed Update
    	}
    }
    
    // Function to update user profile
    public function createJob(Request $request) {
    	// Assigning data from fields to variables
    	$company = $request->input('company');
    	$jobTitle = $request->input('jobTitle');
    	$jobType = $request->input('jobType');
    	$jobDescription = $request->input('jobDescription');
    	$jobStatus = $request->input('jobStatus');
    	$closingDate = $request->input('closingDate');
    	
    	$DAO = new SecurityDAO();
    	
    	//Create new Connection
    	$conn = $DAO->getConnection();
    	
    	$sql = "INSERT INTO `job_posting` (`Company`, `Job_Title`, `Job_Type`, `Job_Description`, `Job_status`, `Closing_Date`)
				VALUES('$company', '$jobTitle', '$jobType', '$jobDescription', '$jobStatus', '$closingDate');";
    	
    	if (mysqli_query($conn, $sql)) {
    		echo "<h1>Job Listing Created</h1><br>";
    		return view("landingPage");
    	} else {
    		$error = mysqli_error($conn);
    		$data = ['error' => $error];
    		return view("errorPage")->with($data); // Redirect for failed Update
    	}
    }
    
    // Function to delete job listings
    public function deleteJob(Request $request) {
    	$id = $request->input('jobID');
    	$DAO = new SecurityDAO();
    	// Creating a new connection.
    	$conn = $DAO->getConnection();
    	// Creating the SQL statement
    	$sql = "DELETE FROM `job_posting` WHERE `Job_ID` = '$id';";
    	
    	if (mysqli_query($conn, $sql)) {
    		echo "<h1>Job Listing Deleted Successfully!</h1><br>";
    		return view("landingPage");
    	}
    	else {
    		$error = mysqli_error($conn);
    		$data = ['error' => $error];
    		return view("errorPage")->with($data); // Redirect for failed Update
    	}
    }
}    
    

