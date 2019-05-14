<?php
$title = "Fran's Furniture - Contact";
$cQuery = $contact->findAll();
$content = loadTemplate('../templates/admin/admincontact_template.php',['cQuery'=>$cQuery, 'contact'=>$contact]);

require_once '../layoutLoader/adminLayoutLoader.php';
?>