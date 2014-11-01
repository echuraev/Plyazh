<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Пряж - see you at the beach | Admin panel</title>
		<? include_once("include/head_static.php") ?>
	</head>
	<body>
		<? include_once("include/header.php") ?>
		<div class="content">
			<? if (!isset($_POST['signInButton'])) {?>
			<h1>Enter!</h1> 
			<form class="form-horizontal" action="index.php" method="post">
				<div class="form-group">
		        	<label for="login" class="col-sm-2 control-label">Login: </label>
		        	<div class="col-sm-9">
		        		<input class="form-control" type="text" name="login" placeholder="Login" id="login" />	
		        	</div>
		        </div>
		        <div class="form-group">
		        	<label for="password" class="col-sm-2 control-label">Password: </label>
		        	<div class="col-sm-9">
		        		<input class="form-control" name="password" type="password" placeholder="Password" id="password" />
		        	</div>
		        </div>
		        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" name="signInButton" class="btn btn-default">Sign in</button>
					</div>
				</div>
	    	</form>
	    	<? } else {
	    		if (isset($_POST['login'])){$login = $_POST['login'];}
	    		if (isset($_POST['password'])){$passwd = $_POST['password'];}
				if (isset($login)) 
					trim($login);
				else 
					$login = "";
				if (isset($passwd)) 
					trim($passwd);
				else 
					$passwd = "";
				if (empty($login) or empty($passwd))
				{
					errMsg("Login or Password field is empty!");
				}
							
				$result = signIn($login, $passwd);
				if (strcmp($result, "0"))
				{
					errMsg($result);
				}
				else echo "Congratulation!";
	    	}?>
        </div>
	</body>
</html>

