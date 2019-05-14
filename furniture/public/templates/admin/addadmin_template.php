<?php
//if submit button is pressed
if (isset($_POST['submit'])) { 
	$_POST['admin']['password'] = password_hash($_POST['admin']['password'], PASSWORD_DEFAULT);//password hashing 
	$admin->save($_POST['admin']); //save the details of admin
	echo 'Admin added';
}
else {
	// if session logged in
	if (isset($_SESSION['loggedin'])) { ?>
	
		<h2>Add Admin</h2>
		<form action="" method="POST">
			<input type="hidden" name="admin[admin_id]">
			<label>Username</label>
			<input type="text" name="admin[username]" />
			<label>Password</label>
			<input type="password" name="admin[password]" />
			<input type="submit" name="submit" value="Add Admin" />
		</form>
<?php
 	}
  }
?>