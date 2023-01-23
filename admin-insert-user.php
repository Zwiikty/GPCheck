
<link rel="stylesheet" href="style/style-insert-user.css">
<form class="form" method="post">
    <h2>INSERT USER</h2>
    <p type="Username:"><input name="username" placeholder="Write Username here.."></input></p>
    <p type="Password:"><input name="password" placeholder="Write Password here.."></input></p>
    <p type="Fullname:"><input name="fullname" placeholder="Write Fullname here.."></input></p>
    <select class="custom-select mr-sm-2" name="status">
                <option selected>Choose...</option>
                <option value="0">admin</option>
                <option value="1">student</option>
                <option value="2">teacher</option>
            </select>
    <button name="submit">Confirm</button>
</form>


<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $status = $_POST['status'];
    $sql_insert = "insert into user (user_username, user_password, user_name, user_status) 
values ('$username', '$password', '$fullname', '$status')";
    mysqli_query($conn, $sql_insert) or die(mysqli_error($conn));
}
?>