<?php
require 'functions/validatefurniture.php';

class FurnitureTest extends \PHPUnit_Framework_TestCase
{
	function testInvalidFurnitureName()
	{
		$row = [
			'name' => '',
			'description' => 'Furniture Furniture',
			'price' => '500.00'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}

	function testInvalidDescription()
	{
		$row = [
			'name' => 'Sofa',
			'description' => '',
			'price' => '500.00'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}

	function testInvalidPrice()
	{
		$row = [
			'name' => 'Sofa',
			'description' => 'Furniture Furniture',
			'price' => ''
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}

	function testValidFurniture()
	{
		$row = [
			'name' => 'Sofa',
			'description' => 'Furniture Furniture',
			'price' => '500.00'
		];
		$valid = testFurniture($row);
		$this->assertTrue($valid);
	}

	function testInvalidCategory()
	{
		$row = [
			'name' => ''
		];
		$valid = testCategory($row);
		$this->assertFalse($valid);
	}

	function testValidCategory()
	{
		$row = [
			'name' => 'Sofa'
		];
		$valid = testCategory($row);
		$this->assertTrue($valid);
	}

}