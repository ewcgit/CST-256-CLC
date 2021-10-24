<?php
// CST-256 CLC API Controller Page
namespace App\Http\Controllers;

// Resources for the login controller's functionality.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\JobModel;
use App\Models\APIUserModel;
use App\Models\AffinityModel;
use App\Models\PortfolioModel;

class ApiController extends Controller {
	// Getting all Job Postings
	public function getJobs(Request $request) { 
		// Checking if a user is logged in
		$loggedIn = session('loggedIn');
		if($loggedIn != 1) {
			Redirect::to('home')->send();
		}
		
		// Data request to the database
		$data = JobModel::all();
		return response()->json($data);
	}
	
	// Getting all Users
	public function getUsers(Request $request) {
		// Checking if a user is logged in
		$loggedIn = session('loggedIn');
		if($loggedIn != 1) {
			Redirect::to('home')->send();
		}
		
		// Checking if a user is an admin
		$role = session('role');
		if($role != "admin") {
			Redirect::to('dashboard')->send();
		}
		// Data request to the database
		$data = APIUserModel::all();
		return response()->json($data);
	}
	
	// Getting all Affinity Groups
	public function getAffinity(Request $request) {
		// Checking if a user is logged in
		$loggedIn = session('loggedIn');
		if($loggedIn != 1) {
			Redirect::to('home')->send();
		}
		
		// Data request to the database
		$data = AffinityModel::all();
		return response()->json($data);
	}
	
	// Getting all Affinity Groups
	public function getPortfolios(Request $request) {
		// Checking if a user is logged in
		$loggedIn = session('loggedIn');
		if($loggedIn != 1) {
			Redirect::to('home')->send();
		}
		
		// Data request to the database
		$data = PortfolioModel::all();
		return response()->json($data);
	}	
}