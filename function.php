<?php 
    require_once("conn.php");
//login
function f_alert($msg) 
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from user where user_username ='$username' and user_password='$password'";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    
    $row = mysqli_fetch_array($result);
        if (!empty($row['user_id'])) {
            $_SESSION['ID'] = $row['user_id'];
            $_SESSION['NAME'] = $row['user_name'];
            if ($row['user_status'] == 0){
                header('location:admin-home.php');
            } elseif ($row['user_status'] == 1) {
                header('location:student-home.php');
            } elseif ($row['user_status'] == 2) {
                header('location:teacher-home.php');
            }
        }else {
            f_alert("ชื่อผู้ใช้/รหัสผิดพลาด");
        }
}
//login


?>