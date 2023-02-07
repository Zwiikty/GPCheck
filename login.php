<?php 
	require_once("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>. : Login : .</title>
	<link rel="stylesheet" href="style/style-login.css">
</head>
<body>
	<div class="box">
		<form action="" method="post">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username" class="form-control">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password" class="form-control">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="register">Sign up</a>
			</div>
			<input type="submit" value="login" name="login">
		</form>
	</div>
</body>
</html>