<?php
require '../db/connect.php';//database connection code
require '../classes/databasetable.php';
require '../classes/tableGenerator.php';
require '../functions/load_templates.php';

$category = new DatabaseTable('category'); //object of category table
$furniture = new DatabaseTable('furniture'); //object of furniture table
$admin = new DatabaseTable('admin'); //object of admin table
$updates = new DatabaseTable('updates'); //object of updates table
$contact = new DatabaseTable('contact'); //object of contact table
?>