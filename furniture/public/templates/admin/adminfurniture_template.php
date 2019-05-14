<section class="left">
<ul>
	<li><a href="admincategories">Categories</a></li>
	<li><a href="adminfurniture">Furniture</a></li>
	<li><a href="archivefurniture">Archived Furniture</a></li>
</ul>
</section>

<section class="right">
	<h2>Furniture</h2>
	<a class="new" href="addfurniture">Add new furniture</a>
	<?php
		echo $table->getHTML(); //displays in the table 
	?>
</section>