<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Utility\MyLogger3;
use App\Services\Utility\ILoggerService;

class TestLoggingController extends Controller {
	protected $logger;
	
	public function __constructor(ILoggerService $logService) {
		$this->logger = $logService;
	}
	
	public function index() {
		$this->logger->info("Logger was used");
	}	
}
