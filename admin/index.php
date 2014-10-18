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
			<h1>Enter!</h1>
			<?
			if (table_exist("admins")) {
				echo "Exist!";
			}
			else {
				$sql = "CREATE TABLE admins
				(
				ID INT NOT NULL AUTO_INCREMENT, 
				PRIMARY KEY(ID),
				login CHAR(50) NOT NULL,
				password CHAR(50) NOT NULL
				)";
				if (mysqli_query($con,$sql)) {
					echo "Table persons created successfully";
				} else {
					echo "Error creating table: " . mysqli_error($con);
				}
			}
			?>
			<form class="form-horizontal" action="index.php" method="post">
				<div class="form-group">
		        	<label for="login" class="col-sm-2 control-label">Login: </label>
		        	<div class="col-sm-9">
		        		<input class="form-control" type="text" placeholder="Login" id="login" />	
		        	</div>
		        </div>
		        <div class="form-group">
		        	<label for="password" class="col-sm-2 control-label">Password: </label>
		        	<div class="col-sm-9">
		        		<input class="form-control" type="password" placeholder="Password" id="password" />
		        	</div>
		        </div>
		        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
	    	</form>
        </div>
	</body>
</html>

