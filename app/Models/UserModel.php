<?php // CST-256 page by team.

namespace App\Models;

class UserModel {
	
	// Login Info.
	private $username;
	private $password;
	private $role;
	
	// Contact Info.
	private $firstName;
	private $lastName;
	private $phone;
	private $email;
	
	// Demographic Info.
	private $streetNumber;
	private $streetName;
	private $city;
	private $state;
	private $zip;
	
	public function __construct($username, $password) { // A constructor.
		$this->username = $username;
		$this->password = $password;
	}
	
	
	// Getters & Setters 
	
	public function getUsername() {
		return $this->username;
	}
	
	public function setUsername($username) {
		$this->username = $username;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password) {
		$this->password = $password;
	}	
	
	public function getFirstName() {
		return $this->firstName;
	}
	
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	
	public function getLastName() {
		return $this->lastName;
	}
	
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getStreetNumber() {
		return $this->streetNumber;
	}
	
	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $streetNumber;
	}
	
	public function getStreetName() {
		return $this->streetName;
	}
	
	public function setStreetName($streetName) {
		$this->streetName = $streetName;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
	}
	
	public function getState() {
		return $this->state;
	}
	
	public function setState($state) {
		$this->state = $state;
	}
	
	public function getZip() {
		return $this->zip;
	}
	
	public function setZip($zip) {
		$this->zip = $zip;
	}
	
	public function getRole() {
		return $this->role;
	}
	
	public function setRole($role) {
		$this->role = $role;
	}
	
}

