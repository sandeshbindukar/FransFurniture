<main class="admin">
	<section class="right">
	<?php
	if (isset($_POST['submit'])) {
		foreach ($aQuery as $row) {
			//checks the password and username
			if ($_POST['username'] == $row['username'] && password_verify($_POST['password'],$row['password'])) {
				$_SESSION['loggedin'] = $row['username'];
			}
		}	
	}

	if (isset($_SESSION['loggedin'])) {
		header("Location:adminhome"); //redirect to adminhome page if logged in sucessfully
		?>
	</section>
		<?php
	}
	else {
		?>
		<!-- Login Form -->
		<h2>Log in</h2>
		<form action="login" method="post" style="padding: 40px">
			<label>Username</label>
			<input type="text" name="username" />

			<label>Password</label>
			<input type="password" name="password" />

			<input type="submit" name="submit" value="Log In" />
		</form>
	<?php
	}
	?>
</main>