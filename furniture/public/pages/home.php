<?php
$title = "Fran's Furniture - Home";
$updateQuery = $updates->findAll();
$content = loadTemplate('../templates/user/home_template.php',['updateQuery'=>$updateQuery]);

require_once '../layoutLoader/layoutLoader.php';

?>