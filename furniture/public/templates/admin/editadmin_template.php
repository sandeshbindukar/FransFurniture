<?php
if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$_POST['admin']['password'] = password_hash($_POST['admin']['password'], PASSWORD_DEFAULT); //password hasing for security
		$admin->save($_POST['admin'],'admin_id'); //save the updated admin details
		echo 'Admin Saved';
	}	
}
else {
	if (isset($_SESSION['loggedin'])) {
		$aQuery = $admin->find('admin_id', $_GET['id']);  //query the admin table with id
		$currentAdmin = $aQuery->fetch(); //fetch all data of admin
	?>
	<!-- Form to edit admin details -->
	<h2>Edit Admin</h2>
	<form action="" method="POST">
		<input type="hidden" name="admin[admin_id]" value="<?php echo $currentAdmin['admin_id']; ?>" />
		<label>Userame</label>
		<input type="text" name="admin[username]" value="<?php echo $currentAdmin['username']; ?>" />
		<label>Password</label>
		<input type="password" name="admin[password]" value="<?php echo $currentAdmin['password']; ?>" />

		<input type="submit" name="submit" value="Save Admin" />
	</form>
	
	<?php
	}
}
?>