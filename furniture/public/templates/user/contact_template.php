<main class="home">
	<!-- <p>Please call us on  01604 90345 or email <a href="mailto:enquiries@fransfurniture.co.uk">enquiries@fransfurniture.co.uk</a> -->
<?php
	if (isset($_POST['submit'])) {
		$contact->save($_POST['contact']); //add details in the contact table
		echo '<h3>Your Enquiry has been added sucessfully. Our team will contact you soon. Thank You<h3>';
	}
	else  { ?>
		<!-- Form to contact us -->
		<h2>Contact Us</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" name="contact[name]">
			<label>Email Address</label>
			<input type="text" name="contact[email]">
			<label>Telephone</label>
			<input type="text" name="contact[phone_no]">
			<label>Enquiry</label>
			<textarea name="contact[enquiry]"></textarea>
			<input type="submit" name="submit" value="Submit" />		
		</form>
<?php } ?>
</main>