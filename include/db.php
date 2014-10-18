<?
// Create connection
$con=mysqli_connect("localhost","echuraev","123456","plyazh");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
	echo "It's ok!";
}

function table_exist($table) {
	$result = mysql_query("SHOW TABLES LIKE '".$table."'");
	echo "<br><br>Test: ".(mysql_num_rows($result) > 0)."<br><br>";
	echo "HERE!!!!";
	return (mysql_num_rows($result) > 0);
}

?>