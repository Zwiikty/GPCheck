<!-- <form method="post">
    <div class="row">
        <div class="col-sm-6">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control">
            <label for="username">fullname</label>
            <input type="text" name="fullname" class="form-control">
            <label for="password">status</label>
            <select class="custom-select mr-sm-2" name="status">
                <option selected>Choose...</option>
                <option value="0">admin</option>
                <option value="1">student</option>
                <option value="2">teacher</option>
            </select>
            <button type="submit" name="submit">submit</button>
        </div>
    </div>
</form> -->
<link rel="stylesheet" href="css/style-insert-user.css">
<form class="form">
    <h2>INSERT USER</h2>
    <p type="Username:"><input placeholder="Write Username here.."></input></p>
    <p type="Password:"><input placeholder="Write Password here.."></input></p>
    <p type="Fullname:"><input placeholder="Write Fullname here.."></input></p>
    <select class="custom-select mr-sm-2" name="status">
                <option selected>Choose...</option>
                <option value="0">admin</option>
                <option value="1">student</option>
                <option value="2">teacher</option>
            </select>
    <button>Confirm</button>
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