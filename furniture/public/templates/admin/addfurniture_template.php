<?php
//if submit button is pressed
if (isset($_POST['submit'])) {
	$_POST['furniture']['archive'] = "no"; //sets the archive to no at first
	$furniture->save($_POST['furniture']); //saves the details of furniture in tha database

	if ($_FILES['image']['error'] == 0) {
		global $pdo;
		$fileName = $pdo->lastInsertId() . '.jpg'; //saves file name as the lastInsertid.jpg
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/furniture/' . $fileName); //move file in the provided directory
	}
	echo 'Furniture added';	
	
}
else { ?>
	<!-- Form to add the new furniture -->
	<h2>Add Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="furniture[name]" />

		<label>Description</label>
		<textarea name="furniture[description]"></textarea>

		<label>Price</label>
		<input type="text" name="furniture[price]" />

		<label>Category</label>
		<select name="furniture[categoryId]">
		<?php
			$categoryQuery = $category->findAll(); //query for category table (gets all data)
			foreach ($categoryQuery as $row) {
				echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
			}
		?>
		</select>

		<label>Condition</label>
		<select name="furniture[furnitureCondition]">
			<option value="Brand New">Brand New</option>
			<option value="Second Hand">Second Hand</option>
		</select>

		<label>Image</label>

		<input type="file" name="image"/>

		<input type="submit" name="submit" value="Add" />
	</form>
<?php
}
?>