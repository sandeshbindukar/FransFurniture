<?php
	if (isset($_SESSION['loggedin'])) {
		if(isset($_GET['id'])){
			$category->delete('id', $_GET['id']); //delete the category
			echo 'Category deleted';
		}

	}
?>