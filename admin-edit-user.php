<?php 
    if (isset($_GET['edit'])) {
        $edit_user = $_GET['edit'];
        $sql_edit_user = "SELECT * FROM user where user_id = '$edit_user'";
        $result = mysqli_query($conn, $sql_edit_user) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result)) : 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div class="row">
        <div class="col-sm-6">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row['user_username']?>">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control" value="<?php echo $row['user_password']?>">
            <label for="username">fullname</label>
            <input type="text" name="fullname" class="form-control" value="<?php echo $row['user_name']?>">
            <label for="password">status</label>
            <select class="custom-select mr-sm-2" name="status">
                <option selected>Choose..</option>
                <option value="0">admin</option>
                <option value="1">student</option>
                <option value="2">teacher</option>
            </select><br>
            <label for="username">room code</label>
            <input type="text" name="roomcode" class="form-control" value="<?php echo $row['user_r_code']?>">
            <label for="username">latitude</label>
            <input type="text" name="latitude" class="form-control" value="<?php echo $row['user_latitude']?>">
            <label for="username">longitude</label>
            <input type="text" name="longitude" class="form-control" value="<?php echo $row['user_longitude']?>">
            <label for="username">time</label>
            <input type="datetime-local" name="time" class="form-control" value="<?php echo $row['user_time']?>">
            <label for="username">checkstatus</label>
            <input type="text" name="checkstatus" class="form-control" value="<?php echo $row['user_checkstatus']?>">
            <br><button type="submit" name="submit">submit</button>
        </div>
    </div>
</form>
</body>
</html>
 <?php 
    endwhile;
    }
 ?>