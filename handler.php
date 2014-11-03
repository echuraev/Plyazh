<?
include_once("./include/common.php");

if (isset($_GET['sign_out']))
{
	session_destroy();
}

if (isset($_GET['lang']))
{
	if (!strcmp($_GET['lang'], "en")) {
		$_SESSION['lang'] = "en";
		setcookie("lang", "en", time()+9999999);
	}
	else {
		$_SESSION['lang'] = "ru";
		setcookie("lang", "ru", time()+9999999);
	}
}

if(@$_SERVER['HTTP_REFERER'] != '')
	exit("<html><head><meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'></head></html>");
else
	exit("<html><head><meta http-equiv='Refresh' content='0; URL=./index.php'></head></html>");
?>