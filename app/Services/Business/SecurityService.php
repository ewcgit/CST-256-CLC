<?php

namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService {
	public function __construct() {
		
	}
	
	public function login(UserModel $user) {
		$security = new SecurityDAO();
		
		$login = $security->findByUser($user);
		
		return $login;
	}
}

