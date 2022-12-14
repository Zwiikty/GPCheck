<?php 
 require_once("conn.inc.php");
 if (isset($_GET['check'])) {
    $username = $_SESSION['NAME'];
    $r_code = $_GET['check'];
    $getdate = $_GET['time'];
    $sql1 = "update user set user_r_code = '$r_code' , user_checkstatus = '1' , user_time = '$getdate' where user_name = '$username'";
    mysqli_query($conn, $sql1) or die (mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card-student</title>
    <link href="style-student-home.css" rel="stylesheet">
    <link href="home-style.css" rel="stylesheet">
    
</head>
<body>
<div id="toggle"></div>
  <div id="sidebar">
      <ul>
          <li><a href="student-home.php">Home</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="logout.inc.php">Log out</a></li>
      </ul>
  </div>
 <!-- side bar -->
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

<!-- Display-->
<?php
$currentDate = new DateTime();
$currentDate->setTimezone(new DateTimeZone('Asia/Bangkok')); 
$sql = "select * from room";
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) :
?>
  <main class="card">
    <div class="row">
    <section class="card กลุ่ม1">
<h3><?php echo $row['r_name'] ?></h3>
    <span>อาจารย์ <?php echo $row['r_teacher'] ?></span>
    <a href="student-home.php?check=<?php echo $row['r_code'];?>&time=<?php echo $currentDate->format('Y/m/d H:i:s')?>">
    <button type="submit">เช็คชื่อ</button></a>
</section>
</div>
  </main>
<?php endwhile; ?>
</body>
</html>