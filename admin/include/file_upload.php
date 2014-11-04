<?php

$dir = "./files/";

copy($_FILES['file']['tmp_name'], $dir.$_FILES['file']['name']);
		
$array = array(
	'filelink' => $dir.$_FILES['file']['name'],
	'filename' => $_FILES['file']['name']
);

echo stripslashes(json_encode($array));

	
?>