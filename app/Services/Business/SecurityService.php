<?php // CST-256 page by team.

namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService {
	public function __construct() { // A constructor.
		
	}
	
	public function login(UserModel $user) {
		$security = new SecurityDAO(); // Instantiating new SecurityDAO object.
		
		$login = $security->findByUser($user); // Returns the user from the database.
		
		return $login;
	}
}

