<?php 
// Dir with pictures
$dir = './img/';

// Check file type
$_FILES['file']['type'] = strtolower($_FILES['file']['type']);
 
// File formats
if ($_FILES['file']['type'] == 'image/png' 
|| $_FILES['file']['type'] == 'image/jpg' 
|| $_FILES['file']['type'] == 'image/gif' 
|| $_FILES['file']['type'] == 'image/jpeg'
|| $_FILES['file']['type'] == 'image/pjpeg')
{	
    // unick_name.jpg
    $filename = md5(date('YmdHis')).'.jpg';
    $file = $dir.$filename;

    // Upload file 
    //copy($_FILES['file']['tmp_name'], $file);
	move_uploaded_file ( $_FILES['file']['tmp_name'], $dir.$filename );
	

    // Array with path to picture  
	$array = array(
		'filelink' => $dir.$filename
	);
	/*
	// New string for file
	$string = ",{\"thumb\": \"".$file."\", \"image\": \"".$file."\"}";
	
	// Add new string to file
	$content=file_get_contents('data.json');
    $content=str_replace(']',"$string \n]",$content);
	
	// Write new string in file
	$f = fopen('data.json', 'w');
	fwrite ($f, $content);
	fclose ($f);
	*/
	// Send path to picture to editor
	echo stripslashes(json_encode($array));   
}
 
?>