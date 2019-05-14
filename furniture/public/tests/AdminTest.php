<?php
require 'functions/validateadmin.php';

class AdminTest extends \PHPUnit_Framework_TestCase
{
	function testInvalidUserame()
	{
		$row = [
			'username' => '',
			'password' => 'abcd'
		];
		$valid = testAdmin($row);
		$this->assertFalse($valid);
	}

	function testInvalidPassword()
	{
		$row = [
			'username' => 'ABC',
			'password' => ''
		];
		$valid = testAdmin($row);
		$this->assertFalse($valid);
	}

	function testValidAdmin()
	{
		$row = [
			'username' => 'ABC',
			'password' => 'abcd'
		];
		$valid = testAdmin($row);
		$this->assertTrue($valid);
	}

}