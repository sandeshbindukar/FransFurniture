<h2>Admin</h2>
<a class="new" href="addadmin">Add New Admin</a>
<?php
//displays the details of admins in the table
	echo '<table >';
	echo '<thead>';
	echo '<tr>';
	echo '<th>UserName</th>';
	echo '<th style="width: 10%">Password</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

	foreach ($adminQuery as $admin) {
		echo '<tr>';
		echo '<td>' . $admin['username'] . '</td>';
		echo '<td>' . $admin['password'] . '</td>';
		echo '<td><a  href="editadmin?id=' . $admin['admin_id'] . '">Edit</a></td>';
		echo '<td><form method="post" action="deleteadmin?id=' . $admin['admin_id'] . '">
		<input type="hidden" name="id" value="' . $admin['admin_id'] . '" />
		<input type="submit" name="submit" value="Delete" />
		</form></td>';
		echo '</tr>';
	}
	echo '</thead>';
	echo '</table>';
?>