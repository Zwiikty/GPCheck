<link rel="stylesheet" href="style/style-insert-user.css">
<form class="form" method="post">
    <h2>INSERT ROOM</h2>
    <label>ชื่อห้อง</label>
    <input type="text" name="r_name" class="form-control">
    <label>วันที่/เวลา</label>
    <input type="datetime-local" name="datetime" class="form-control">
    <button type="submit" name="submit">submit</button>
</form>


<?php 
require_once("geolocation.html");
 //code generate
 function room_code($chars) 
{
  $letter = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($letter), 0, $chars);
}
$f_roomcode = room_code(6);
$roomcode = $f_roomcode;
$_SESSION['r_code'] = $roomcode;
//code generate

if (isset($_POST['submit'])) {
$username = $_SESSION['NAME'];
$roomname = $_POST['r_name'];
$datetime = $_POST['datetime'];
$latitude = $_COOKIE['get_latitude'];
$longitude = $_COOKIE['get_longitude'];

$sql_insert_room = "insert into room (r_code,r_name,r_time,r_latitude,r_longitude,r_teacher) values('$roomcode','$roomname','$datetime','$latitude','$longitude','$username')";
mysqli_query($conn, $sql_insert_room) or die (mysqli_error($conn));
}
?>