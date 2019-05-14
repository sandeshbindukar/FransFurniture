<?php
require 'functions/validate_enquiry.php';

class EnquiryTest extends \PHPUnit_Framework_TestCase
{
	function testInvalidName()
	{
		$row = [
			'name' => '',
			'email' => 'name@gmail.com',
			'telephone' => '9810202501',
			'enquiry' =>'Hello!'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidEmail()
	{
		$row = [
			'name' => 'name',
			'email' => '',
			'telephone' => '9810202501',
			'enquiry' =>'Hello!'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidTelephone()
	{
		$row = [
			'name' => 'name',
			'email' => 'name@gmail.com',
			'telephone' => '',
			'enquiry' =>'Hello!'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidEnquiry()
	{
		$row = [
			'name' => 'name',
			'email' => 'name@gmail.com',
			'telephone' => '9810202501',
			'enquiry' =>''
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testValidEnquiry()
	{
		$row = [
			'name' => 'name',
			'email' => 'name@gmail.com',
			'telephone' => '9810202501',
			'enquiry' =>'Hello!'
		];
		$valid = testEnquiry($row);
		$this->assertTrue($valid);
	}
}