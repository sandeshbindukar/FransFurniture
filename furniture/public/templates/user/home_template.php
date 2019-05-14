<main class="home">
	<p>Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.</p>

	<!-- Display Updates in the homepage -->
	<h2>Updates</h2>
	<ul class="furniture">
	<?php
	foreach ($updateQuery as $row) {
		echo '<li>';
		echo '<div class="details">';
		echo '<img src ='. $row['image'].' />';
		echo '<h2>' . $row['title'] . '</h2>';
		echo '<h3>' . $row['description'] . '</h3>';
		echo '<p>' . $row['date_created'] . '</p>';
		echo '</div>';
		echo '<li>';
	}
	
	?>
	</ul>
</main>