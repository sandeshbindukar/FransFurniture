<?php
	$tempVars = [
		'title' => $title,
		'content' => $content
	];

$html = loadTemplate('../templates/admin/adminlayout.php', $tempVars);
echo $html;

?>