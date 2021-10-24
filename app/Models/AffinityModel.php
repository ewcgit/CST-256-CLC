<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffinityModel extends Model {
	
	// API Info
	protected $table = 'affinity';
	protected $fillable = ['groupID', 'Group Name','Group Description'];
}