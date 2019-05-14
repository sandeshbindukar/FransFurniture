<?php
$title = "Fran's Furniture - Our Furniture";

$furnitureQuery = $furniture->find('archive','no');
$content = loadTemplate('../templates/user/furniture_template.php',['furnitureQuery' => $furnitureQuery,'category'=>$category,'furniture'=>$furniture]);
require_once '../layoutLoader/layoutLoader.php';
?>