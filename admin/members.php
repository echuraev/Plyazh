<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin panel</title>
		<? include_once("include/head_static.php") ?>
	</head>
	<body>
		<? include_once("include/header.php") ?>
		<?
		if (!empty($_SESSION['id']))
		{
		?>
		<div class="nav">
			<div class="nav-hide-borders">
				<div class="nav-member3"><a href="./index.php">Main page</a></div>
				<div class="nav-member3"><a href="./program.php">Program</a></div>
				<div class="nav-member3 active"><a href="#">Members</a></div>
			</div>
		</div>
		<? } ?>
		<div class="content">
			<? 
			if (!empty($_SESSION['id']))
			{
				echo "123123";  
			}
			else
			{
				exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
			} ?>
        </div>
	</body>
</html>

