<? include_once './include/common.php';
$lang = (!strcmp($_SESSION['lang'], "en")) ? "en" : "ru";
$result = mysql_query("SELECT * FROM pages WHERE name='program' AND lang='".$lang."'");
if (mysql_num_rows($result) == 0)
{
	$title = (!strcmp($_SESSION['lang'], "en")) ? "Error!" : "Ошибка!";
	$description = "";
	$keywords = "";
	$text = (!strcmp($_SESSION['lang'], "en")) ? "<h1>Error!</h1><p>Error! Table in db is empty! Try later...</p>" : 
	"<h1>Ошибка!</h1><p>Ошибка! Таблица в базе данных пуста! Попробуйте позже...</p>";
}
else {
	$myrow = mysql_fetch_array($result);
	$title = $myrow['title'];
	$description = $myrow['description'];
	$keywords = $myrow['keywords'];
	$text = $myrow['text'];
} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><? echo $title; ?></title>
		<meta name="description" content="<? echo $description; ?>">
		<meta name="keywords" content="<? echo $keywords; ?>" />
		<? include_once("include/head_static.php") ?>
	</head>
	<body>
		<? include_once("include/header.php") ?>
		<div class="nav">
			<div class="nav-hide-borders">
				<? if (!strcmp($_SESSION['lang'], "en")) { ?>
				<div class="nav-member3"><a href="./index.php">Main page</a></div>
				<div class="nav-member3 active"><a href="#">Program</a></div>
				<div class="nav-member3"><a href="./register.php">Registration</a></div>
				<? } else { ?>
				<div class="nav-member3"><a href="./index.php">Главная страница</a></div>
				<div class="nav-member3 active"><a href="#">Программа</a></div>
				<div class="nav-member3"><a href="./register.php">Регистрация</a></div>
				<? } ?>
			</div>
		</div>
		<div class="content">
			<? echo $text; ?>
        </div>
	</body>
</html>

