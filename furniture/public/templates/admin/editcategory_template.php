<?php
if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$category->save($_POST['category'],'id'); //saves the updated category details
		echo 'Category Saved';
	}
	
}
else {
	if (isset($_SESSION['loggedin'])) {
		$cQuery = $category->find('id', $_GET['id']); //query the category table with id
		$currentCategory = $cQuery->fetch(); //fetches all data from database table
	?>
	<!-- Form to edit category -->
	<h2>Edit Category</h2>
	<form action="" method="POST">
		<input type="hidden" name="category[id]" value="<?php echo $currentCategory['id']; ?>" />
		<label>Name</label>
		<input type="text" name="category[name]" value="<?php echo $currentCategory['name']; ?>" />

		<input type="submit" name="submit" value="Save Category" />
	</form>
	
	<?php
	}
}
?>