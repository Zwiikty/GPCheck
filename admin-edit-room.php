<?php 
    if (isset($_GET['edit'])) {
        $edit_room = $_GET['edit'];
        $sql_edit_room = "SELECT * FROM room where r_id = '$edit_room'";
        $result = mysqli_query($conn, $sql_edit_room) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result)) : 
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
<form method="post">
    <div class="row">
        <div class="col-sm-6">
            <input type="hidden" name="id" value="<?php echo $row['r_id'];?>">
            <label for="username">ชื่อห้อง</label>
            <input type="text" name="roomname" class="form-control" value="<?php echo $row['r_name'];?>">
            <label for="password">วันที่/เวลา</label>
            <input type="datetime-local" name="datetime" class="form-control" value="<?php echo $row['r_time'];?>">
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
    $update_roomname = $_POST['roomname'];
    $update_datetime = $_POST['datetime'];
    $sql_update_room = "UPDATE room set r_name = '$update_roomname', r_time = '$update_datetime' where r_id = '$update_id'";
    mysqli_query($conn, $sql_update_room) or die(mysqli_error($conn));
    header('location:admin-home.php?page=del_room');
}
?>