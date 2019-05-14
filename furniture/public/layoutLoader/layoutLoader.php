<?php
	$tempVars = [
		'title' => $title,
		'content' => $content
	];

$html = loadTemplate('../templates/user/layout.php', $tempVars);
echo $html;

?>