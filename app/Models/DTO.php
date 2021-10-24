<?php

namespace App\Models;

class DTO implements \JsonSerializable {	
	private $errorCode;
	private $message;
	private $data;
	
	public function jsonSerialize() {
		return get_object_vars($this);
	}
	
	public function __construct($errorCode, $message, $data) {
		
		$this->errorCode = $errorCode;
		$this->message = $message;
		$this->data = $data;
	}
}

