<?php 

namespace App\Http\Controllers;
use App\Services\Data\SecurityDAO;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function jobPostingsAll()
    {
        $DAO = new SecurityDAO();
        $conn = $DAO->getConnection();
        $sql = "SELECT * FROM `job_posting`;";
        $result = $conn->query($sql);
        
        
        echo "<h1 style='color:white'>Current Job Postings</h1>";
        
        // Printing results to a table
        if ($result->num_rows > 0) {
            echo "<table class='table table-dark table-striped' border='1'><tr><th>Company</th><th>Job Title</th><th>Closing Date</th><th>Job ID</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr><td>".$row["Company"]."</td><td>".$row["Job_Title"]."</td><td>".$row["Closing_Date"]."</td>
                    <td>".$row["Job_ID"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    }
    
    
    
    
    public function jobPostingsByID(Request $request)
    {
        $id = $request->input('job');
        $DAO = new SecurityDAO();
        $conn = $DAO->getConnection();
        $sql = "SELECT * FROM `job_posting` WHERE `Job_ID` = '$id';";
        $result = $conn->query($sql);
        
        // Printing results to a table
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $Job_ID= $row["Job_ID"];
                $Company= $row["Company"];
                $Job_Title= $row["Job_Title"];
                $Job_Type= $row["Job_Type"];
                $Job_Description= $row["Job_Description"];
                $Job_status= $row["Job_status"];
                $Closing_Date= $row["Closing_Date"];            
        } 
        $data = ['Job_ID' => $Job_ID, 'Company' => $Company, 'Job_Title' => $Job_Title, 'Job_Type' => $Job_Type, 'Job_Description' => $Job_Description, 
            'Job_status' => $Job_status, 'Closing_Date' => $Closing_Date];
        return view('jobPostingDetail')->with($data);
        
        }}
    
}    
    

