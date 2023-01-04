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
</head>

<body>
    <div class="row">
        <div class="col-sm-3">
            <center>
                <b>ยินดีต้อนรับ</b><br><br>
                <?php echo $_SESSION['NAME']; ?>
            </center>
        </div>
        <!-- <div class="list-group">
            <a href="?page=home" class="list-group-item list-group-item-action">Home</a>
            <a class="list-group-item list-group-item-action disabled">จัดการข้อมูล</a>
            <a href="?page=insert_user" class="list-group-item list-group-item-action">Insert user</a>
            <a href="?page=del_user" class="list-group-item list-group-item-action">Delete & Edit user</a>
            <a class="list-group-item list-group-item-action disabled">จัดการห้องเรียน</a>
            <a href="?page=insert_room" class="list-group-item list-group-item-action">Insert room</a>
            <a href="?page=del_room" class="list-group-item list-group-item-action">Delete room & Edit user</a>
            <a href="logout.php" class="list-group-item list-group-item-action">Log out</a>
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