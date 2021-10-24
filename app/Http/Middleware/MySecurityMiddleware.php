<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Utility\MyLogger3;
use Illuminate\Support\Facades\Redirect;

class MySecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
    	$path = $request->path();
    	$logger = new MyLogger3();
    	
    	$logger->info("Entering My Security Middleware in handle() at path: " . $path);
    	
    	if ($request->is('adminpanel') || $request->is('editUser') || $request->is('deleteUser') || $request->is('newjoblisting')) {
    		// Checking if a user is an admin
    		$role = session('role');
    		if($role != "admin") {
    			Redirect::to('dashboard')->send();
    		}
    		$logger->info("Admin Role was verified.");
    	}
    	
    		return $next($request);
    	
    	
    }
}
