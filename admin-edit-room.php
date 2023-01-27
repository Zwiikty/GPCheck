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
    <link rel="stylesheet" href="style/style-insert-user.css">
</head>
<body>
<form class="form" method="post">
  	<h2>Edit Room</h2>
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['r_id'];?>">
  <label>Roomname:</label>
       <input type="text" name="roomname" class="form-control" value="<?php echo $row['r_name'];?>">
     <label>Date/time:</label>
       <input type="datetime-local" name="datetime" class="form-control" value="<?php echo $row['r_time'];?>">
     <label>Latitude:</label>
       <input type="text" name="latitude" class="form-control" value="<?php echo $row['r_latitude'];?>">
    <label>Longitude:</label>
      <input type="text" name="longitude" class="form-control" value="<?php echo $row['r_longitude'];?>">
    <label>Teacher:</label>
	<select class="custom-select mr-sm-2" name="user_create">
       <?php 
        $sql_user_create = "select * from user where user_status = 2";
        $result_user_create = mysqli_query($conn,  $sql_user_create) or die(mysqli_error($conn));
        while ($row_user = mysqli_fetch_array($result_user_create)) :
      ?>
        <option value="<?php echo $row_user['user_name'];?>">
        <?php echo $row_user['user_name'];?>
        </option>
      <?php endwhile; ?>
    </select>
            <button type="bottom" name="update">submit</button>
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
	$update_latitude = $_POST['latitude'];
  	$update_longitude = $_POST['longitude'];
  	$update_teacher = $_POST['user_create'];
    $sql_update_room = "UPDATE room set r_name = '$update_roomname', r_time = '$update_datetime', r_latitude = '$update_latitude', r_longitude = '$update_longitude', r_teacher = '$update_teacher' where r_id = '$update_id'";
    mysqli_query($conn, $sql_update_room) or die(mysqli_error($conn));
    header('location:admin-home.php?page=del_room');
}
?>