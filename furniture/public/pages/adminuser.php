<?php
$title = "Fran's Furniture - Admin";

$adminQuery = $admin->findAll();

$content = loadTemplate('../templates/admin/adminuser_template.php',['adminQuery'=>$adminQuery]);

require_once '../layoutLoader/adminLayoutLoader.php';
?>