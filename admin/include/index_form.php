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
		msgPage("Login or Password field is empty!");
	}
				
	$result = signIn($login, $passwd);
	if (strcmp($result, "0"))
	{
		msgPage($result);
	}
	else {
		exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
	}
}?>