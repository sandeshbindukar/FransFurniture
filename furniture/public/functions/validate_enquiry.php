<?php

function testEnquiry($row){
	$valid = true;
	if ($row['name']=='') {
		$valid = false;
	}
	if ($row['email']=='') {
		$valid = false;
	}
	if ($row['telephone']=='') {
		$valid = false;
	}
	if ($row['enquiry']=='') {
		$valid = false;
	}
	return $valid;
}

