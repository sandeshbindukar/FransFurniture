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
			<li><a href="home">Home</a></li>
			<li><a href="furniture">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact us</a></li>
			<li><a href="faqs">FAQs</a></li>
			<li><a href="login">Login</a></li>
		</ul>
	</nav>
<img src="../images/randombanner.php"/>
		<?php echo $content; ?>
		<!--  display the content -->
	<footer>
		&copy; Fran's Furniture <?php echo date ('Y');?>
		<!-- display year dynamically -->
	</footer>
</body>
</html>
