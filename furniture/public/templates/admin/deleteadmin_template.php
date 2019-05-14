<?php
	if (isset($_SESSION['loggedin'])) {
		if(isset($_GET['id'])){
			$admin->delete('admin_id', $_GET['id']); //deletes the admin details
			echo 'Admin deleted';
		}

	}
?>