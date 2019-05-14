<?php

function testFurniture($row){
	$valid = true;
	if ($row['name']=='') {
		$valid = false;
	}
	if ($row['description']=='') {
		$valid = false;
	}
	if ($row['price']=='') {
		$valid = false;
	}
	return $valid;
}


function testCategory($row){
	$valid = true;
	if ($row['name']=='') {
		$valid = false;
	}
	return $valid;
}

