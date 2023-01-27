<?php 
require_once("conn.php");
 //code generate
 function room_code($chars) 
{
  $letter = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($letter), 0, $chars);
}
$f_roomcode = room_code(6);
$roomcode = $f_roomcode;
//code generate
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style-insert-user.css">
  <title>. : Admin Control : .</title>
</head>
<body>
<form class="form" method="post">
    <h2>INSERT ROOM</h2>
    <label>ชื่อห้อง</label>
    <input type="text" name="r_name" class="form-control">
    <label>วันที่/เวลา</label>
    <input type="datetime-local" name="datetime" class="form-control">
    <label>ละติจูด</label>
    <input type="text" name="latitude" class="form-control">
    <label>ลองติจูด</label>
    <input type="text" name="longitude" class="form-control">
    <label >อาจารย์ที่สร้าง</label>
	<select name="user_create">
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
  <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
$roomname = $_POST['r_name'];
$datetime = $_POST['datetime'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$user_create = $_POST['user_create'];

$sql_insert_room = "insert into room (r_code,r_name,r_time,r_latitude,r_longitude,r_teacher) values('$roomcode','$roomname','$datetime','$latitude','$longitude','$user_create')";
mysqli_query($conn, $sql_insert_room) or die (mysqli_error($conn));
}
?>