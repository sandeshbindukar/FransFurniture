<main class="admin">
<section class="left">
	<ul>
		<?php 
		$select_category = $category->findAll(); //query the category table
		foreach($select_category as $row ){  ?>
			<li><a href="index.php?page=furniture&categoryId=<?php echo $row['id'] ?>&cname=<?php echo $row['name'] ?>"><?php echo $row['name']; }?></a></li> 
	</ul>
</section>

<form style="display:flex; margin-left: 50px;"  method="POST">
    <select name="furnitureCondition">
    	<option value="Brand New">Brand New</option>
		<option value="Second Hand">Second Hand</option>
	</select>
    <input type="submit" name="submit" value="Search" >
</form>

<br section class="right">
<?php
	if(isset($_POST['submit'])){ 
		//For the Search Tab/ Button
		if (isset($_GET['categoryId'])) { ?>
			<h1><?php  echo $_GET['cname'];  ?></h1>  <!-- displays the category name -->
			<ul class="furniture">
			<?php 
			$select_furniture = $furniture->findMoreX('categoryId', $_GET['categoryId'], 'furnitureCondition', $_POST['furnitureCondition'],'archive','no');
			if($select_furniture->rowCount()==0) ?> '<h2>No <?php echo $_GET['cname'] ?> Available</h2>'; 
			<?php
			foreach ($select_furniture as $furniture) {
				echo '<li>';
				if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
					echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
				}
				echo '<div class="details">';
				echo '<h2>' . $furniture['name'] . '</h2>';
				echo '<h3>£' . $furniture['price'] . '</h3>';
				echo '<h4>' . $furniture['furnitureCondition'] . '</h4>';
				echo '<p>' . $furniture['description'] . '</p>';
				echo '</div>';
				echo '</li>';
			} ?>
			</ul>
		<?php
		}
		else{ ?>		
			<!-- Displays the details of furniture with the condition and if is not archive  -->
			<h1>Furniture</h1>
			<ul class="furniture">
			<?php 
				$select_furniture = $furniture->findMore('furnitureCondition', $_POST['furnitureCondition'],'archive','no');
				if($select_furniture->rowCount()==0)echo '<h2>No Furniture Available</h2>';
				foreach ($select_furniture as $furniture) {
					$categoryQuery = $category->find('id', $furniture['categoryId']);
					$cquery = $categoryQuery->fetch();
					
					echo '<li>';
					if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
						echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
					}
					echo '<div class="details">';
					echo '<h2>' . $furniture['name'] . '</h2>';
					echo '<h3>' . $cquery['name'] . '</h3>';
					echo '<h3>£' . $furniture['price'] . '</h3>';
					echo '<h4>' . $furniture['furnitureCondition'] . '</h4>';
					echo '<p>' . $furniture['description'] . '</p>';
					echo '</div>';
					echo '</li>';
				} 
			?>
			</ul>
	<?php }
 	}

	else{
		// Displays the details of furniture if not archived
		if (isset($_GET['categoryId'])) { ?>
			<h1><?php  echo $_GET['cname'];  ?></h1>
			<ul class="furniture">
		<?php 
			$select_furniture = $furniture->findMore('categoryId',$_GET['categoryId'],'archive','no');
			foreach ($select_furniture as $furniture) {
				echo '<li>';
				if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
					echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
				}
				echo '<div class="details">';
				echo '<h2>' . $furniture['name'] . '</h2>';
				echo '<h3>£' . $furniture['price'] . '</h3>';
				echo '<h4>' . $furniture['furnitureCondition'] . '</h4>';
				echo '<p>' . $furniture['description'] . '</p>';
				echo '</div>';
				echo '</li>';
			} ?>
			</ul>
		<?php
		}
		else{ ?>
				<!-- To Show the details when the Category is selected -->
			<h1>Furniture</h1>
			<ul class="furniture">
			<?php
			foreach ($furnitureQuery as $furniture) {
				$categoryQuery = $category->find('id', $furniture['categoryId']);
				$cquery = $categoryQuery->fetch();
				
				echo '<li>';
				if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
					echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
				}
				echo '<div class="details">';
				echo '<h2>' . $furniture['name'] . '</h2>';
				echo '<h3>' . $cquery['name'] . '</h3>';
				echo '<h4>£' . $furniture['price'] . '</h4>';
				echo '<h4>' . $furniture['furnitureCondition'] . '</h4>';
				echo '<p>' . $furniture['description'] . '</p>';
				echo '</div>';
				echo '</li>';
			}
			?>
			</ul>
		<?php }
	}	
	?>
</section>
</main>