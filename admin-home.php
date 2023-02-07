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
    <link rel="stylesheet" href="style/style-admin-home.css"> 
</head>

<body>
    
<div id="toggle"></div> 
  <div class="wrapper">
       <!-- Top menu -->
        <div class="sidebar"> 
          <div class="profile"> 
               <h3>ยินดีต้อนรับ</h3><br><br> 
                <p><?php echo $_SESSION['NAME']; ?></p>
            </div>
            <!-- menu item-->
            <ul>
                <li>
                    <a href="?page=home" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span contenteditable="false" style="color: grey; font-weight: bold; class=" placeholder ui-draggable unselectable="ON">
                            จัดการข้อมูล</span>
                    </a>
                </li>
                <li>
                    <a href="admin-insert-user" target="_blank">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Insert user</span>
                    </a>
                </li>
                <li>
                <a href="?page=del_user" target="_blank">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Delete & Edit user</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span contenteditable="false" style="color: grey; font-weight: bold; class=" placeholder ui-draggable unselectable="ON" >
                            จัดการห้องเรียน</span>
                    </a>
                </li>
                <li>
                    <a href="admin-insert-room" target="_blank">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Insert room</span>
                    </a>
                </li>
                <li>
                    <a href="?page=del_room">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Delete room & Edit user</span>
                    </a>
                </li>
                <li>
                    <a href="logout">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Log out</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    </div>

    <div class="section">
        <div class="top_navbar">
            <div class="hamburger">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>

    </div>
</body>
</html>
<?php echo $_SESSION['NAME']; ?>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}
switch ($_GET['page']):
    case "home":
        require_once('admin-home');
        break;
    case "insert_user":
        require_once('admin-insert-user');
        break;
    case "del_user":
        require_once('admin-del-user');
        break;
    case "edit_user":
        require_once('admin-edit-user');
        break;
    case "insert_room":
        include('admin-insert-room');
        break;
    case "del_room":
        require_once('admin-del-room');
        break;
    case "edit_room":
        require_once('admin-edit-room');
        break;
    default:
        require_once('admin-home');
endswitch;
?>
