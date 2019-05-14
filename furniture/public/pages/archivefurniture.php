<?php
$title = "Fran's Furniture - Our Furniture";

$table = new TableGenerator();
$headings = array('ID','Name','Condition','Price','Archive','Edit','Delete');
$records = $furniture->findSpc(['id','name','furnitureCondition','price'],'yes');

$table->setHeadings($headings);

if (isset($_GET['id'])) {
		$furniture->archive($_GET['id'], 'no','id');
		header('location: index.php?page=archivefurniture');	
	}

foreach ($records as $row) {
		$table->addRow($row);
	}

$content = loadTemplate('../templates/admin/adminfurniture_template.php',['table'=>$table]);

require_once '../layoutLoader/adminLayoutLoader.php';
?>