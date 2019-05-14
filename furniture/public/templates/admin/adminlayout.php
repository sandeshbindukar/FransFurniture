<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<title><?php echo $title; ?></title>
		<!-- display title -->
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="adminhome">Home</a></li>
			<li><a href="adminfurniture">Our Furniture</a></li>
			<li><a href="adminabout">About Us</a></li>
			<li><a href="admincontact">Contact us</a></li>
			<li><a href="adminuser">Admins</a></li>
			<li><a href="logout">Log Out</a></li>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	<main class="admin">
	<?php
		if (isset($_SESSION['loggedin'])) { 
		  echo $content;  // display the content
		}
	?>
	</main>
	<footer>
		&copy; Fran's Furniture <?php echo date ('Y');?> 
		<!-- display year dynamically -->
	</footer>
</body>
</html>
