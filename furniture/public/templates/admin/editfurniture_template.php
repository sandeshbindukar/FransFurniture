<?php
if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$furniture->save($_POST['furniture'],'id'); //saves the updated details
		echo 'Product Saved';
	}
	if ($_FILES['image']['error'] == 0) {
		$fileName = $_GET['id'] . '.jpg'; //rename the filename with id.jpg
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/furniture/' . $fileName); //move the new file in the target directory
	}
}
else {
	if (isset($_SESSION['loggedin'])) {
		$fQuery = $furniture->find('id', $_GET['id']); //query furniture table with id
		$furniture = $fQuery->fetch(); //fetches all the data
	?>
	<!-- Form to edit furniture -->
	<h2>Edit Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="furniture[id]" value="<?php echo $furniture['id']; ?>" />
		<label>Name</label>
		<input type="text" name="furniture[name]" value="<?php echo $furniture['name']; ?>" />

		<label>Description</label>
		<textarea name="furniture[description]"><?php echo $furniture['description']; ?></textarea>

		<label>Price</label>
		<input type="text" name="furniture[price]" value="<?php echo $furniture['price']; ?>" />

		<label>Category</label>
		<select name="furniture[categoryId]">
		<?php
			$cQuery = $category->findAll(); //query to show cateories dynamically

			foreach ($cQuery as $row) {
				if ($furniture['categoryId'] == $row['id']) {
					echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
				}
				else {
					echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
				}
			}
		?>
		</select>
		<label>Condition</label>
		<select name="furniture[furnitureCondition]">
			<option value="Brand New">Brand New</option>
			<option value="Second Hand">Second Hand</option>
		</select>
		<?php
			if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
				echo '<img style="width: 200px; clear: both" src="../images/furniture/' . $furniture['id'] . '.jpg" />';
			}
		?>
		<label>Product image</label>

		<input type="file" name="image" />

		<input type="submit" name="submit" value="Save Product" />

	</form>
	<?php
	}
} 
?>