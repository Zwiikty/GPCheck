<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. : Admin Control : .</title>
    <link href="style-admin-home.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
</head>

<body>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <div class="row">
        <div class="col-sm-3">
            <!-- <center>
                <b>ยินดีต้อนรับ</b><br><br>
                <?php echo $_SESSION['NAME']; ?>
            </center>
        </div> -->

            <div class="wrapper">
                <!-- top menu-->
                <div class="sidebar">
                    <!-- profile image & text -->
                    <div class="profile">
                        <b>ยินดีต้อนรับ</b><br><br>
                        <?php echo $_SESSION['NAME']; ?>
                    </div>
                    <!-- menu item -->
                    <ul>
                        <li>
                            <a href="?page=home" class="active">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="?page=insert_user">
                                <span class="icon"><i class="fas fa-desktop"></i></span>
                                <span class="item">insert_user</span>
                            </a>
                        </li>


                        <a href="?page=del_user">
                            <span class="icon"><i class="fas fa-user-friends"></i></span>
                            <span class="item">del_user</span>
                        </a>
                        </li>

                        <a href="?page=insert_room">
                            <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                            <span class="item">insert_room</span>
                        </a>
                        </li>

                        <a href="?page=del_room">
                            <span class="icon"><i class="fas fa-database"></i></span>
                            <span class="item">del_room</span>
                        </a>
                        </li>

                        <a href="logout.php">
                            <span class="icon"><i class="fas fa-chart-line"></i></span>
                            <span class="item">log out</span>
                        </a>
                        </li>

                </div>
            </div>

            <!--
            <a href="?page=home" class="list-group-item list-group-item-action">Home</a>
            <a class="list-group-item list-group-item-action disabled">จัดการข้อมูล</a>
            <a href="?page=insert_user" class="list-group-item list-group-item-action">Insert user</a>
            <a href="?page=del_user" class="list-group-item list-group-item-action">Delete & Edit user</a>
            <a class="list-group-item list-group-item-action disabled">จัดการห้องเรียน</a>
            <a href="?page=insert_room" class="list-group-item list-group-item-action">Insert room</a>
            <a href="?page=del_room" class="list-group-item list-group-item-action">Delete room & Edit user</a>
            <a href="logout.php" class="list-group-item list-group-item-action">Log out</a>

        </div>
    </div> -->
        </div>


</body>

</html>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}
switch ($_GET['page']):
    case "home":
        require_once('admin-home.php');
        break;
    case "insert_user":
        require_once('admin-insert-user.php');
        break;
    case "del_user":
        require_once('admin-del-user.php');
        break;
    case "edit_user":
        require_once('admin-edit-user.php');
        break;
    case "insert_room":
        require_once('admin-insert-room.php');
        break;
    case "del_room":
        require_once('admin-del-room.php');
        break;
    case "edit_room":
        require_once('admin-edit-room.php');
        break;
    default:
        require_once('admin-home.php');
endswitch;
?>