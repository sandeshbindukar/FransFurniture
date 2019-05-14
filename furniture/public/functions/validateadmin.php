<?php

function testAdmin($row){
	$valid = true;
	if ($row['username']=='') {
		$valid = false;
	}
	if ($row['password']=='') {
		$valid = false;
	}
	return $valid;
}
