<form method="post">
    <div class="row">
        <div class="col-sm-6">
            <label>ชื่อห้อง</label>
            <input type="text" name="r_name" class="form-control">
            <label>วันที่/เวลา</label>
            <input type="datetime-local" name="datetime" class="form-control">
            <button type="submit" name="submit">submit</button>
        </div>
    </div>
</form>

<?php 
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
$sql_insert_room = "insert into room (r_code,r_name,r_time,r_latitude,r_longitude,r_teacher) values('$roomcode','$roomname','$datetime','$lat','$lon','$username')";
mysqli_query($conn, $sql_insert_room) or die (mysqli_error($conn));
}
?>
  <!--GPS -->
  <script>
    function getLocation(){
        
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(position =>{
                $lat = position.coords.altitude
                $lon = position.coords.longitude
            });
        }
    }