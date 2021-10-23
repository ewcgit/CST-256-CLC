<?php

namespace App\Services\Utility;

use Illuminate\Support\Facades\Log;

class MyLogger3 implements ILoggerService {
	public function debug($message) {
		Log::debug($message);
	}
	
	public function warning($message) {
		Log::warning($message);
	}
	
	public function error($message) {
		Log::error($message);
	}
	
	public function info($message) {
		Log::info($message);
	}
}

