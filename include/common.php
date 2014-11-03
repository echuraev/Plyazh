<?
header( 'Content-Type: text/html; charset=utf-8' );

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
mysql_set_charset('utf8');

$sql = "CREATE TABLE admins
		(
		ID INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		login CHAR(50) NOT NULL,
		password CHAR(50) NOT NULL
		)";
mysql_query($sql);

$sql = "CREATE TABLE pages
		(
		name VARCHAR(20) NOT NULL,
		title VARCHAR(50) NOT NULL,
		description VARCHAR(50),
		keywords VARCHAR(50),
		text TEXT,
		lang VARCHAR(5) NOT NULL
		)";
mysql_query($sql);
$text_ru = "<h1>Здесь будет заголовок!</h1><p>Здесь будет текст</p>";
$text_en = "<h1>Here will be header!</h1><p>Here will be text</p>";
if (mysql_num_rows(mysql_query("SELECT * FROM pages")) == 0)
{
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('main', 'Главная', '', '', '".$text_ru."', 'ru')");
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('program', 'Программа', '', '', '".$text_ru."', 'ru')");
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('register', 'Регистрация', '', '', '".$text_ru."', 'ru')");
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('main', 'Main page', '', '', '".$text_en."', 'en')");
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('program', 'Program', '', '', '".$text_en."', 'en')");
	mysql_query("INSERT INTO pages (name, title, description, keywords, text, lang) VALUES ('register', 'Registration', '', '', '".$text_en."', 'en')");
}

// Start session
session_start();

if (isset($_COOKIE['lang']))
{
	$_SESSION[lang] = $_COOKIE['lang'];
}
if (!isset($_SESSION['lang']))
{
	$_SESSION['lang'] = "ru";
}
?>