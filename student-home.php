<?php 
 require_once("conn.php");
 require_once("function.php");
 require_once("geolocation.html");
 require_once("geolocation-distance.php");

//-------button---------
 if (isset($_GET['check'])) {
    if (($_GET['between_distance']) <= 0.05) {
    $username = $_SESSION['NAME'];
    $r_code = $_GET['check'];
    $getdate = $_GET['time'];
    $latitude = $_COOKIE['get_latitude'];
    $longitude = $_COOKIE['get_longitude'];

    f_alert("เช็คชื่อเรียบร้อยแล้ว");
    $sql1 = "update user set user_r_code = '$r_code' , user_latitude = '$latitude' , user_longitude = '$longitude' , user_checkstatus = '1' , user_time = '$getdate' where user_name = '$username'";
    mysqli_query($conn, $sql1) or die (mysqli_error($conn));
    header("Refresh:0, url=student-home.php");
  }else {
    f_alert("ระยะห่างจากห้องมากกว่า 50 m ไม่สามารถเช็คชื่อได้");
    header("Refresh:0, url=student-home.php");
  }
 }
//-------button---------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. : Student Control : .</title>
    <link rel="stylesheet" href="style/style-student-home.css">
    <link rel="stylesheet" href="style/style-home.css">
    <link rel="stylesheet" href="style/style-grid.css">
    
</head>
<body>
<!-- side bar -->
<div id="toggle"></div>
  <div id="sidebar">
      <ul>
          <li><a href="student-home.php">Home</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="logout.php">Log out</a></li>
      </ul>
  </div>
 
 <script>
  const toggle = document.getElementById('toggle');
  const sidebar = document.getElementById('sidebar');

  document.onclick = function(e){
      if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
      {
          toggle.classList.remove('active');
          sidebar.classList.remove('active');
      }
  }  
  toggle.onclick = function(){
      toggle.classList.toggle('active');
      sidebar.classList.toggle('active');
  }
  </script>
<!-- side bar -->

<!-- Display-->
<div class="grid-container">
<?php
$lat1 = $_COOKIE['get_latitude'];
$lon1 = $_COOKIE['get_longitude'];
$currentDate = new DateTime();
$currentDate->setTimezone(new DateTimeZone('Asia/Bangkok')); 
$sql = "select * from room";
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) :
?>
    <div class="grid-item"> 
        <main class="card">
        <div class="row">
        <section class="card กลุ่ม1">
        <h3><?php echo $row['r_name'] ?></h3>
        <span>อาจารย์ <?php echo $row['r_teacher'] ?></span>
        <span>ระยะห่าง : <?php echo $distance_room =  getDistanceBetweenPointsNew($lat1, $lon1, $row['r_latitude'], $row['r_longitude'])*1000; ?> เมตร</span>
        <a href="student-home.php?check=<?php echo $row['r_code'];?>&time=<?php echo $currentDate->format('Y/m/d H:i:s');?>&between_distance=<?php echo $distance_room;?>">
        <button type="submit">เช็คชื่อ</button></a>
        <button type="submit" onclick="getLocation()">reset</button>
        </section>
        </div>
        </main>
    </div>
<?php endwhile; ?>
</div>
<!-- Display-->

<!-- GPS -->

<!-- GPS -->

</body>
</html>
