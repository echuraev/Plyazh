<?
// Start session
session_start();

// Create connection
$db_server = "localhost";
$db_user = "echuraev";
$db_passwd = "123456";
$db_name = "plyazh";
$db = mysql_connect($db_server, $db_user, $db_passwd );
if (!$db) {
	die("Failed to connect to MySQL.");
}
mysql_select_db ($db_name, $db);
//$conn = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

// Check connection
//if (mysqli_connect_errno()) {
//	die("Failed to connect to MySQL: ".mysqli_connect_error());
//}

$sql = "CREATE TABLE admins
		(
		ID INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		login CHAR(50) NOT NULL,
		password CHAR(50) NOT NULL
		)";
mysql_query($sql);

?>