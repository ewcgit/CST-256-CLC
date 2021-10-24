<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class APIUserModel extends Model {
	
	// API Info
	protected $table = 'users';
	protected $fillable = ['id', 'username', 'email', 'role', 'first_name', 'last_name', 'phone', 'street_number', 'street_name', 'city', 'state', 'zip', 'affinity'];
}