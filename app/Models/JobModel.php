<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobModel extends Model {
	protected $table = 'job_posting';
	protected $fillable = ['Job_ID', 'Company', 'Job_Title', 'Job_Type', 'Job_Description', 'Job_status', 'Closing_Date'];
}