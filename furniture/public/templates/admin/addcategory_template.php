<?php
//if submit button is pressed
if (isset($_POST['submit'])) {
	$category->save($_POST['category']); //saves the details of category
	echo 'Category added';
}
else {
//if the session loggedin
	if (isset($_SESSION['loggedin'])) { ?>
	
		<h2>Add Category</h2>
		<form action="" method="POST">
			<input type="hidden" name="category[id]">
			<label>Name</label>
			<input type="text" name="category[name]" />
			<input type="submit" name="submit" value="Add Category" />
		</form>
<?php
 	}
  }
?>