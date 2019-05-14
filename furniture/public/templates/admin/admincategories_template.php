<h2>Categories</h2>
<a class="new" href="addcategory">Add new category</a>
<?php //displays categories in the table
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

	$categoryQuery = $category->findAll();
	foreach ($categoryQuery as $category) {
		echo '<tr>';
		echo '<td>' . $category['name'] . '</td>';
		echo '<td><a style="float: right" href="editcategory?id=' . $category['id'] . '">Edit</a></td>';
		echo '<td><form method="post" action="deletecategory?id=' . $category['id'] . '">
		<input type="hidden" name="id" value="' . $category['id'] . '" />
		<input type="submit" name="submit" value="Delete" />
		</form></td>';
		echo '</tr>';
	}
	echo '</thead>';
	echo '</table>';
?>