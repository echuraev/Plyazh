<?

function msgPage ($text) 
{
	$back_text = (!strcmp($_SESSION['lang'], "ru")) ? "Вернуться назад" : "Back";
	$main_text = (!strcmp($_SESSION['lang'], "ru")) ? "Вернуться на главную" : "Back to the main page";
	$link = (@$_SERVER['HTTP_REFERER'] != '') ? "<a href=".$_SERVER['HTTP_REFERER'].">".$back_text."</a>" : "<a href='./index.php'>".$main_text."</a>";
	echo "<p>".$text."</p><p>".$link."</p>";
}

function signIn($login, $passwd) 
{
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$passwd = stripslashes($passwd);
	$passwd = htmlspecialchars($passwd);
	
	if (strlen($login) < 4 || strlen($passwd) < 6)
	{
		return "Error! Short login (< 4 symbols) or password (< 6 symbols)!";
	}

	$passwd = md5($passwd);
	$passwd = strrev($passwd);
	$passwd = md5($passwd);
	
	$result = mysql_query("SELECT * FROM admins");
	
	if (!$result)
	{
		return "MySQL error: ".mysql_error();
	}
	
	if (mysql_num_rows($result) == 0)
	{
		// create new user
		$result = mysql_query("INSERT INTO admins (login, password) VALUES ('".$login."', '".$passwd."')");
		if(!$result)
		{
			return 'Could not create new admin: '.mysql_error();
		}
	}
	
	$result = mysql_query("SELECT * FROM admins WHERE login='".$login."' AND password='".$passwd."'"); 
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['ID']))
	{
		return "Error! Incorrect login or password!";
	}
	
	$_SESSION['id'] = $myrow['ID']; 
	$_SESSION['login'] = $myrow['login']; 
	
	return 0;
}
?>