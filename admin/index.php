<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin panel</title>
		<? include_once("include/head_static.php") ?>
		<?
		echo $_GET['sign_out'];
		if (isset($_GET['sign_out']))
		{
			session_destroy();
			if(@$_SERVER['HTTP_REFERER'] != '')
				exit("<html><head><meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'></head></html>");
			else
				exit("<html><head><meta http-equiv='Refresh' content='0; URL=./index.php'></head></html>");
		}
		?>
	</head>
	<body>
		<? include_once("include/header.php") ?>
		<?
		if (!empty($_SESSION['id']))
		{
		?>
		<div class="nav">
			<div class="nav-hide-borders">
				<div class="nav-member3 active"><a href="#">Main page</a></div>
				<div class="nav-member3"><a href="./program.php">Program</a></div>
				<div class="nav-member3"><a href="./members.php">Members</a></div>
			</div>
		</div>
		<? } ?>
		<div class="content">
			<? 
			if (!empty($_SESSION['id']))
			{?>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="web_title" class="col-sm-2 control-label">Web page title: </label>
						<div class="col-sm-9">
				        	<input class="form-control" name="web_title" placeholder="Web Title" id="web_title" />
				       	</div>
					</div>
					<div class="form-group">
						<label for="text_title" class="col-sm-2 control-label">Text title: </label>
						<div class="col-sm-9">
				        	<input class="form-control" name="text_title" placeholder="Text Title" id="text_title" />
				       	</div>
					</div>
					<h2>Meta words</h2>
					<h2>slide fotos</h2>
					<div class="form-group">
						<label for="content" class="col-sm-2 control-label">Text: </label>
						<div class="col-sm-9">
							<textarea class="form-control" id="content" name="content"></textarea>
				       	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<button type="submit" name="saveButton" class="btn btn-default">Save</button>
						</div>
					</div>
				</form>   
			<? }
			else
			{
				include("./include/index_form.php");
			} ?>
        </div>
	</body>
</html>
