<?php 
	require_once("function.php");
	if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_register = "insert into user (user_username, user_password, user_name, user_status) 
	values ('$username', '$password', '$fullname', '1')";
    mysqli_query($conn, $sql_register) or die(mysqli_error($conn));
    f_alert("ลงทะเบียนเรียบร้อย");
    header("Refresh:0, url=login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>. : Register : .</title>
	<link rel="stylesheet" href="style/style-regis.css">
</head>
<body>
	<div class="box">
		<form action="" method="post">
			<h2>Sign up</h2>
			<div class="inputBox">
				<input type="text" required="required" name="fullname" class="form-control">
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
			<input type="submit" value="Register" name="register">
		</form>
	</div>
</body>
</html>