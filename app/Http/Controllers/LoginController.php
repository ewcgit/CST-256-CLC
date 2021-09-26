<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class LoginController extends Controller {
	public function index(Request $request) {
		$login = new SecurityService();
		$username = $request->input('username');
		$password = $request->input('password');
		
		$userModel = new UserModel($username, $password);

		// Validating login 1 for valid 0 for invalid
		$validation = $login->login($userModel);
		echo $validation;
		if ($validation == 1) {
			$data = ['username' => $username];
			return view("loginpassed")->with($data);
		}
		
		else {
			return view("loginfailed");
		}
		

	}
}