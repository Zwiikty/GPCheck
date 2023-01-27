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
    <title>. : Admin Control : .</title>
    <link rel="stylesheet" href="style/style-insert-user.css">
</head>
<body>
<form class="form" method="post">
  <h2>Edit User</h2>
            <input type="hidden" name="id" value="<?php echo $row['user_id'];?>">
            <p type="Username:"><input name="username" value="<?php echo $row['user_username'];?>">
            <p type="Password:"><input name="password"  value="<?php echo $row['user_password'];?>">
            <p type="Fullname:"><input name="fullname" value="<?php echo $row['user_name'];?>">
            <p type="Status:"><select class="custom-select mr-sm-2" name="status">
                <option selected>Choose..</option>
                <option value="0">admin</option>
                <option value="1">student</option>
                <option value="2">teacher</option>
            </select>
            <button type="bottom" name="update">submit</button>
        </div>
    </div>
</form>
</body>
</html>
 <?php 
    endwhile;
    }
 ?>

<?php 
if (isset($_POST['update'])) {
    $update_id = $_POST['id'];
    $update_username = $_POST['username'];
    $update_password = $_POST['password'];
    $update_fullname = $_POST['fullname'];
    $update_status = $_POST['status'];
    $sql_update_user = "UPDATE user set user_username = '$update_username', user_password = '$update_password', user_name = '$update_fullname', user_status = '$update_status'
    where user_id = '$update_id'";
    mysqli_query($conn, $sql_update_user) or die(mysqli_error($conn));
    header('location:admin-home.php?page=del_user');
}
?>