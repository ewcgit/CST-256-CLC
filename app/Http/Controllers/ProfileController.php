<?php // CST-256 page by team. 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\SecurityDAO;

class ProfileController extends Controller {
    public function userProfile() {
        $username = session('username');
        $DAO = new SecurityDAO();
        
        //Create new Connection
        $conn = $DAO->getConnection();
        
        $sql = "SELECT * FROM `users` WHERE `username` = '$username';"; // User query.
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
            while($row = $result->fetch_assoc()) {
                // Verifies each database variable.
                $id = $row["id"];
                $firstName = $row["first_name"];
                $lastName = $row["last_name"];
                $role = $row["role"];
                $email = $row["email"];
                $phone = $row["phone"];
                $streetNumber = $row["street_number"];
                $streetName = $row["street_name"];
                $city = $row["city"];
                $state = $row["state"];
                $zip = $row["zip"];
            }
        }
        
        $data = ['username' => $username, 'id' => $id, 'firstName' => $firstName, 'lastName' => $lastName, 'role' => $role, 'email' => $email, 'phone' => $phone, 'streetNumber' => $streetNumber,
            'streetName' => $streetName, 'city' => $city, 'state' => $state, 'zip' => $zip];
        return view("userProfile")->with($data); // Sends results to userprofile view.
    }
    
    // Function to update user profile
    public function updateProfile(Request $request) {
        // Assigning data from fields to variables
        $username = $request->input('username');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $role = $request->input('role');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $streetNumber = $request->input('streetNumber');
        $streetName = $request->input('streetName');
        $city = $request->input('city');
        $state = $request->input('state');
        $zip = $request->input('zip');
        $id = session('id');
        $DAO = new SecurityDAO();
        
        //Create new Connection
        $conn = $DAO->getConnection();
        
        $sql = "UPDATE `users` SET `username` = '$username', `email` = '$email', `first_name` = '$firstName',
		`last_name` = '$lastName', `phone` = '$phone', `street_number` = '$streetNumber', `street_name` = '$streetName',
		`city` = '$city', `state` = '$state', `zip` = '$zip' WHERE `id` = '$id';";
        
        if (mysqli_query($conn, $sql)) {
            echo "<h1>Profile Updated</h1><br>";
            return view("landingPage");
        } else {
            $error = mysqli_error($conn);
            $data = ['error' => $error];
            return view("registrationFailed")->with($data); // Redirect for failed Update
        }
    }
    public function eportfolioProfile() {
        $username = session('username');
        $DAO = new SecurityDAO();
        
        //Create new Connection
        $conn = $DAO->getConnection();
        
        $sql = "SELECT * FROM `users` WHERE `username` = '$username';"; // User query.
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
            while($row = $result->fetch_assoc()) {
                // Verifies each database variable.
                $fkey = $row["id"];
            }
        }
        
        $sql = "SELECT * FROM `portfolio` WHERE `ID` = $fkey;"; // Search for eprofile based on foreign key ID
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
            while($row = $result->fetch_assoc()) {
                
                $employee_from_date1 = $row["employee_from_date1"];
                $employee_to_date1 = $row["employee_to_date1"];
                $employee_City1 = $row["employee_City1"];
                $employee_State1 = $row["employee_State1"];
                $employee_job_title1 = $row["employee_job_title1"];
                $employee_Employer1 = $row["employee_Employer1"];
                $employee_Job_Description1 = $row["employee_Job_Description1"];
                $employee_from_date2 = $row["employee_from_date2"];
                $employee_to_date2 = $row["employee_to_date2"];
                $employee_City2 = $row["employee_City2"];
                $employee_State2 = $row["employee_State2"];
                $employee_job_title2 = $row["employee_job_title2"];
                $employee_Employer2 = $row["employee_Employer2"];
                $employee_Job_Description2 = $row["employee_Job_Description2"];
                $employee_from_date3 = $row["employee_from_date3"];
                $employee_to_date3 = $row["employee_to_date3"];
                $employee_City3 = $row["employee_City3"];
                $employee_State3 = $row["employee_State3"];
                $employee_job_title3 = $row["employee_job_title3"];
                $employee_Employer3 = $row["employee_Employer3"];
                $employee_Job_Description3 = $row["employee_Job_Description3"];
                $skill1 = $row["skill1"];
                $skill2 = $row["skill2"];
                $skill3 = $row["skill3"];
                $skill4 = $row["skill4"];
                $skill5 = $row["skill5"];
                $yearfrom_school1 = $row["yearfrom_school1"];
                $to_year_school1 = $row["to_year_school1"];
                $school_name1 = $row["school_name1"];
                $degree_type1 = $row["degree_type1"];
                $yearfrom_school2 = $row["yearfrom_school2"];
                $to_year_school2 = $row["to_year_school2"];
                $school_name2 = $row["school_name2"];
                $degree_type2 = $row["degree_type2"]; }
                
                $data = ['employee_from_date1' => $employee_from_date1,
                    'employee_to_date1' => $employee_to_date1,
                    'employee_City1' => $employee_City1,
                    'employee_State1' => $employee_State1,
                    'employee_job_title1' => $employee_job_title1,
                    'employee_Employer1' => $employee_Employer1,
                    'employee_Job_Description1' => $employee_Job_Description1,
                    'employee_from_date2' => $employee_from_date2,
                    'employee_to_date2' => $employee_to_date2,
                    'employee_City2' => $employee_City2,
                    'employee_State2' => $employee_State2,
                    'employee_job_title2' => $employee_job_title2,
                    'employee_Employer2' => $employee_Employer2,
                    'employee_Job_Description2' => $employee_Job_Description2,
                    'employee_from_date3' => $employee_from_date3,
                    'employee_to_date3' => $employee_to_date3,
                    'employee_City3' => $employee_City3,
                    'employee_State3' => $employee_State3,
                    'employee_job_title3' => $employee_job_title3,
                    'employee_Employer3' => $employee_Employer3,
                    'employee_Job_Description3' => $employee_Job_Description3,
                    'skill1' => $skill1,
                    'skill2' => $skill2,
                    'skill3' => $skill3,
                    'skill4' => $skill4,
                    'skill5' => $skill5,
                    'yearfrom_school1' => $yearfrom_school1,
                    'to_year_school1' => $to_year_school1,
                    'school_name1' => $school_name1,
                    'degree_type1' => $degree_type1,
                    'yearfrom_school2' => $yearfrom_school2,
                    'to_year_school2' => $to_year_school2,
                    'school_name2' => $school_name2,
                    'degree_type2' => $degree_type2];
                return view('eportfolioProfile')->with($data);
        }}
        
        
        public function affinityMemberDisplay() {
            $username = session('username');
            $DAO = new SecurityDAO();
            
            //Create new Connection
            $conn = $DAO->getConnection();
            
            $sql = "SELECT * FROM `users` WHERE `username` = '$username';"; // User query.
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
                while($row = $result->fetch_assoc()) {
                    // Verifies each database variable.
                    $affinity = $row["affinity"];
                }
            }
            
            $sql = "SELECT * FROM `affinity` WHERE `groupID` = $affinity;"; // Search for eprofile based on foreign key ID
            $result = $conn->query($sql);
            
             if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
                while($row = $result->fetch_assoc()) {
                    // Verifies each database variable.
                    
                    $groupID = $row["groupID"];
                    $groupName = $row["Group Name"];
                    $groupDescription = $row["Group Description"];
                    
                }
            }
            
            $data = ['groupID' => $groupID, 'groupName' => $groupName, 'groupDescription' => $groupDescription];
            if ($affinity = 1) { return view("affinityIsMember")->with($data);} // Sends results to userprofile view.}
            else {  return view("affinityNotMember")->with($data);}
        }
         public function addAffinity() {
             $groupid = session('groupid');
             $username = session('username');
             $DAO = new SecurityDAO();
             
             //Create new Connection
             $conn = $DAO->getConnection();
             echo $groupid;
             
             $sql = "Update `users` SET affinity = 3 WHERE `username`  = '$username';"; // Search for eprofile based on foreign key ID
             if ($conn->query($sql) === TRUE) {
                 echo "Record updated successfully";
             } else {
                 echo "Error updating record: " . $conn->error;
             }
             return view('affinityIsMember')->with ($data);
           
         }
         public function removeAffinity(){
             
             $DAO = new SecurityDAO();
             $username = session('username');
             
             // Create new connection
             $conn = $DAO->getConnection();
             
             // Update session user affinity group to 1 to remove affinity
             $sql = "UPDATE `users` SET `affinity` = 1 WHERE `username` = '$username';";
             
             // Check if query was successful
             if ($conn->query($sql) === TRUE) {
                 // Echo success message and redirect to Landing Page
                 echo "<h1>$username successfully removed the affinity";
                 return view("landingPage");
             } else {
                 // A SQL error occurred, gather the data, redirect to Error Page with the error message
                 $error = $conn->error;
                 $data = ['error' => $error];
                 return view("errorPage")->with($data);
             }
         }}
         

         
    

        
         
