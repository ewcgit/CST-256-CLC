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
        table {
            border: 1px solid #fcfdff;
            border-collapse: collapse;
            background-color: #181a1c;
        }
        table th{
            column-span: 2;
            text-align:center;
        }
        
        table td {
            border: 1px solid #fcfdff;
            
        }
        
        table td:first-child {
            

        }
        
        table td:last-child {
}
	  
    </style>
</head>  
<?php  // CST-256 page by team.
use App\Http\Controllers\ProfileController;

?>

@extends('layouts.appmaster')
@section('title', 'Member Portfolio')
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
	
	<body>

    <div class="col-md-6">
    	<h2>Employment History</h2>
    	<table>
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