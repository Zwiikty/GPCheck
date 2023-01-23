<?php 
	require_once("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>. : Register : .</title>
	<link rel="stylesheet" href="css/style-regis.css">
</head>
<body>
	<div class="box">
		<form action="" method="post">
			<h2>Sign up</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username" class="form-control">
				<span>Name & Surname</span>
				<i></i>
			</div>
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
			<input type="submit" value="Register" name="login">
		</form>
	</div>
</body>
</html>