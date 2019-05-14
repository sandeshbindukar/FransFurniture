<?php
	if (isset($_SESSION['loggedin'])) {
		if(isset($_GET['id'])){
			$furniture->delete('id', $_GET['id']); //delete the furniture
			echo 'Furniture deleted';
		}

	}

?>