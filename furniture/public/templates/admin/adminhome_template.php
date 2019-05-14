<?php
//if submit button is pressed
if (isset($_POST['submit']) && !empty($_FILES["image"]["name"]))  {

	$targetDir = "../images/"; //directory to store images
	$fileName = basename($_FILES["image"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);	

	$temp_file = $_FILES['image']['tmp_name'];
	move_uploaded_file($temp_file, $targetFilePath); //move file to the directory

	$_POST['updates']['image'] = $targetFilePath; //saves the path in the database
	$updates->save($_POST['updates']); //saves the details in the update tab;e
	echo 'Updates added';
}
else {
	if (isset($_SESSION['loggedin'])) { ?>
		<!-- form to add updates -->
		<h2>Add Updates</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Title</label>
			<input type="text" name="updates[title]">
			<label>Description</label>
			<textarea name="updates[description]"></textarea>
			<label>Image</label>
			<input type="file" name="image" />
			<input type="submit" name="submit" value="Add" />		
		</form>
<?php
 	}
  }
?>



