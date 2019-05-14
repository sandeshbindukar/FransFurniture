<?php
$title = "Fran's Furniture - Home";
$aQuery= $admin->findAll();
$content = loadTemplate('../templates/user/login_template.php',['aQuery'=>$aQuery]);

require_once '../layoutLoader/layoutLoader.php';

?>