<?php
$title = "Fran's Furniture - Our Furniture";
$content = loadTemplate('../templates/admin/addfurniture_template.php',['category'=>$category,'furniture'=>$furniture]);

require_once '../layoutLoader/adminLayoutLoader.php';
?>