<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model {
	
	// API Info
	protected $table = 'portfolio';
	protected $fillable = ['Member_ID', 'ID', 'Job_ID', 'employee_from_date1','employee_to_date1','employee_City1', 'employee_State1',
			'employee_job_title1', 'employee_Employer1', 'employee_Job_Description1', 'employee_from_date2', 'employee_to_date2',
			'employee_City2', 'employee_State2', 'employee_job_title2', 'employee_Employer2', 'employee_Job_Description2', 'employee_from_date3',
			'employee_to_date3', 'employee_City3', 'employee_State3', 'employee_job_title3', 'employee_Employer3', 'employee_Job_Description3' ,
			'skill1', 'skill2', 'skill3', 'skill4', 'skill5', 'yearfrom_school1', 'to_year_school1', 'school_name1', 'degree_type1',
			'yearfrom_school2', 'to_year_school2', 'school_name2','degree_type2'];
}