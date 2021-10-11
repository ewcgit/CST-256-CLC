<?php  // CST-256 page by team.
use App\Http\Controllers\ProfileController;

// Login Validation
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
	Redirect::to('home')->send();
}

// A stylish page for Profile information.
?>

@extends('layouts.appmaster')
@section('title', 'Member Portfolio')
@section('content')
	
	<body>

    <div class="col-md-6">
    	<table>
    		<tr>
    			<th>Employment History</th>
    		</tr>
    		<tr>
    			<th>Employer 1</th>
    		</tr>
    		<tr>
    			<td>Employer</td>
    			<td><?php echo $employee_Employer1?></td>
    		</tr> 
    		<tr>
    			<td>Start Date</td>
    			<td><?php echo $employee_from_date1?></td>	
    		</tr>
    		<tr>
    			<td>End Date</td>
    			<td><?php echo $employee_to_date1?></td>	
    		</tr>
    		<tr>
    			<td>City</td>
    			<td><?php echo $employee_City1?></td>	
    		</tr>
    		<tr>
    			<td>State</td>
    			<td><?php echo $employee_State1?></td>	
    		</tr>
    		<tr>
    			<td>Job Title</td>
    			<td><?php echo $employee_job_title1?></td>	
    		</tr>	
    		<tr>
    			<td>Job Description</td>
    			<td><?php echo $employee_Job_Description1?></td>	
    		</tr>				 
    		<tr>
    			<th>Employer 2</th>
    		</tr>
    		<tr>
    			<td>Employer</td>
    			<td><?php echo $employee_Employer2?></td>
    		</tr>      		
    		<tr>
    			<td>Start Date</td>
    			<td><?php echo $employee_from_date2?></td>	
    		</tr>
    		<tr>
    			<td>End Date</td>
    			<td><?php echo $employee_to_date2?></td>	
    		</tr>
    		<tr>
    			<td>City</td>
    			<td><?php echo $employee_City2?></td>	
    		</tr>
    		<tr>
    			<td>State</td>
    			<td><?php echo $employee_State2?></td>	
    		</tr>
    		<tr>
    			<td>Job Title</td>
    			<td><?php echo $employee_job_title2?></td>	
    		</tr>	
    		<tr>
    			<td>Job Description</td>
    			<td><?php echo $employee_Job_Description2?></td>	
    		</tr>
			<tr>
    			<th>Employer 3</th>
    		</tr>
    		<tr>
    			<td>Employer</td>
    			<td><?php echo $employee_Employer3?></td>
    		</tr>     		
    		<tr>
    			<td>Start Date</td>
    			<td><?php echo $employee_from_date3?></td>	
    		</tr>
    		<tr>
    			<td>End Date</td>
    			<td><?php echo $employee_to_date3?></td>	
    		</tr>
    		<tr>
    			<td>City</td>
    			<td><?php echo $employee_City3?></td>	
    		</tr>
    		<tr>
    			<td>State</td>
    			<td><?php echo $employee_State3?></td>	
    		</tr>
    		<tr>
    			<td>Job Title</td>
    			<td><?php echo $employee_job_title3?></td>	
    		</tr>	
    		<tr>
    			<td>Job Description</td>
    			<td><?php echo $employee_Job_Description3?></td>	
    		</tr>
    		<tr>
    			<th>Skills</th>
    		</tr>
    		 <tr>
    			<td><?php echo $skill1?></td>
    		</tr>
    		 <tr>
    		 <td><?php echo $skill2?></td>
    		</tr>
    		 <tr>
    		 <td><?php echo $skill3?></td>
    		</tr>
    		 <tr>
    		 <td><?php echo $skill4?></td>
    		</tr>   
    		 <tr>
    		 <td><?php echo $skill5?></td>
    		</tr>    
     		<tr>
    			<th>Education</th>
    		</tr>
    		<tr>
    			<td>School 1</td>
    			<td><?php echo $school_name1?></td>
    		</tr>    		
    		<tr>
    			<td>Start Date</td>
    			<td><?php echo $yearfrom_school1?></td>	
    		</tr>
    		<tr>
    			<td>End Date</td>
    			<td><?php echo  $to_year_school1?></td>	
    		</tr>
    		<tr>
    			<td>Degree</td>
    			<td><?php echo $degree_type1?></td>	
    		</tr>
    		<tr>
    			<td>School 2</td>
    			<td><?php echo $school_name2?></td>
    		</tr>    		
    		<tr>
    			<td>Start Date</td>
    			<td><?php echo $yearfrom_school2?></td>	
    		</tr>
    		<tr>
    			<td>End Date</td>
    			<td><?php echo  $to_year_school2?></td>	
    		</tr>
    		<tr>
    			<td>Degree</td>
    			<td><?php echo $degree_type2?></td>	
    		</tr>
   	    		   		
			    				   		 		    	    		    		    		
    	</table>	
	</div>
@endsection