<?php
//database connection code
$pdo = new PDO('mysql:dbname=furniture;host=127.0.0.1', 'root', '', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);

?>