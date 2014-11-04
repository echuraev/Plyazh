<? include_once("../include/common.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin panel | Program</title>
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
		<? } ?>
		<div class="content">
			<? 
			if (isset($_POST['saveButton']))
			{
				$title = (isset($_POST['web_title'])) ? $_POST['web_title']: "";
				$description = (isset($_POST['description'])) ? $_POST['description']: "";
				$keywords = (isset($_POST['keywords'])) ? $_POST['keywords']: "";
				$text = (isset($_POST['content'])) ? $_POST['content']: "";
				$lang = (!strcmp($_SESSION['lang'], "en")) ? "en" : "ru";
				$sql = "UPDATE pages SET title='".$title."', description='".$description."', keywords='".$keywords."', text='".$text."' WHERE name='program' AND lang='".$lang."'";
				$result = mysql_query ($sql);
				if ($result == 'true') 
					$ret_text = (!strcmp($_SESSION['lang'], "en")) ? "Information has been updated successfully!" : "Информация успешно обновлена!";
				else 
					$ret_text = (!strcmp($_SESSION['lang'], "en")) ? "Error! Cannot update info in db." : "Ошибка! Не могу обновить информацию в базе данных.";
				msgPage($ret_text);
			}
			else {
				if (!empty($_SESSION['id']))
				{ 
					$lang = (!strcmp($_SESSION['lang'], "en")) ? "en" : "ru";
					$result = mysql_query("SELECT * FROM pages WHERE name='program' AND lang='".$lang."'");
					if (mysql_num_rows($result) == 0)
					{
						$title = "";
						$description = "";
						$keywords = "";
						$text = "";
					}
					else {
						$myrow = mysql_fetch_array($result);
						$title = $myrow['title'];
						$description = $myrow['description'];
						$keywords = $myrow['keywords'];
						$text = $myrow['text'];
					}
			?>
				<form class="form-horizontal" action="./program.php" method="post">
					<div class="form-group">
						<label for="web_title" class="col-sm-2 control-label">
						<? echo (!strcmp($_SESSION['lang'], "en")) ? "Web page title:" : "Название страницы:"; ?>
						</label>
						<div class="col-sm-9">
				        	<input class="form-control" name="web_title" placeholder="<? echo (!strcmp($_SESSION['lang'], "en")) ? "Web title" : "Название страницы"; ?>
				        	" id="web_title"  value="<? echo $title; ?>"/>
				       	</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-2 control-label">
						<? echo (!strcmp($_SESSION['lang'], "en")) ? "Description:" : "Описание:"; ?>
						</label>
						<div class="col-sm-9">
				        	<input class="form-control" name="description" placeholder="<? echo (!strcmp($_SESSION['lang'], "en")) ? "Description" : "Описание"; ?>
				        	" id="description" value="<? echo $description; ?>" />
				       	</div>
					</div>
					<div class="form-group">
						<label for="keywords" class="col-sm-2 control-label">
						<? echo (!strcmp($_SESSION['lang'], "en")) ? "Keywords:" : "Ключевые слова:"; ?>
						</label>
						<div class="col-sm-9">
				        	<input class="form-control" name="keywords" placeholder="<? echo (!strcmp($_SESSION['lang'], "en")) ? "keyword1,keyword2,..." : "слово1, слово2,..."; ?>
				        	" id="keywords" value="<? echo $keywords; ?>" />
				       	</div>
					</div>
					<div class="form-group">
						<label for="content" class="col-sm-2 control-label">
						<? echo (!strcmp($_SESSION['lang'], "en")) ? "Text:" : "Текст:"; ?> 
						</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="content" name="content"><? echo $text; ?></textarea>
				       	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<button type="submit" name="saveButton" class="btn btn-default">
							<? echo (!strcmp($_SESSION['lang'], "en")) ? "Save" : "Сохранить"; ?>
							</button>
						</div>
					</div>
				</form> 
			<? }
			else
			{
				exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
			} } ?>
        </div>
	</body>
</html>