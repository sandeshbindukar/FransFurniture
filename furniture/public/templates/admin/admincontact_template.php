<?php
if (isset($_GET['id'])) { //gets the id 
	if (isset($_SESSION['loggedin']) ) {
		//updates the data and customer is responded
	 	$contact->updateSingle($_GET['id'],'complete','yes','id'); 
	 	$contact->updateSingle($_GET['id'],'completed_by',$_SESSION['loggedin'],'id');
	 	echo 'Responded to Customer Sucessfully ';
	 }
 } 
else{	//displays the details in the table
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th style="width:10%">Name</th>';
	echo '<th style="width: 10%">Email</th>';
	echo '<th style="width: 10%">Phone Number</th>';
	echo '<th style="width: 25%">Enquiry</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 10%">Completed</th>';
	echo '<th style="width: 10%">Completed By</th>';
	echo '</tr>';

	foreach ($cQuery as $row) {
		echo '<tr>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['phone_no'] . '</td>';
		echo '<td>' . $row['enquiry'] . '</td>';
		echo '<td><a  href="admincontact?id=' . $row['id'] . '">Complete</a></td>';
		echo '<td>' . $row['complete'] . '</td>';
		echo '<td>' . $row['completed_by'] . '</td>';
		echo '</tr>';
	}
	echo '</thead>';
	echo '</table>';
}
?>