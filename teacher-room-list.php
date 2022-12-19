<?php 
 require_once("conn.php");
#delete room
 if (isset($_GET['room_del'])) {
  $room_del = $_GET['room_del'];
  $sql2 = "delete from room where r_code = '$room_del'";
  $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
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
    <link href="style-home.css" rel="stylesheet">
    <link href="style-create-room.css" rel="stylesheet">
    
</head>
<body>
<div id="toggle"></div>
  <div id="sidebar">
      <ul>
          <li><a href="teacher-home.php">Home</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="logout.php">Log out</a></li>
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
$username = $_SESSION['NAME'];
$sql = "select * from room where r_teacher = '$username'";
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) :
?>
  <main class="card">
    <div class="row">
    <section class="card กลุ่ม3">
<h3><?php echo $row['r_name'] ?></h3>
    <span>อาจารย์ <?php echo $row['r_teacher'] ?></span>
    <a href="teacher-room-details.php?roomdetails=<?php echo $row['r_code'];?>">
    <button class="button">รายละเอียด</button></a>
    <a href="teacher-room-list.php?room_del=<?php echo $row['r_code'];?>">
    <button type="submit">ลบห้อง</button></a>
    </section>
</div>
  </main>
<?php  endwhile; ?>
 
<!-- pop up list-->
<?php 
    if (isset($_GET['roomdetails'])) { 
      $roomdetails = $_GET['roomdetails'];
      $sql1 = "select user_name,user_latitude,user_longitude,user_time,user_checkstatus from user where user_r_code = '$roomdetails'";
      $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
      while ($row1 = mysqli_fetch_array($result1)) :
      endwhile; } ?>
<!-- pop up -->
<!-- pop up card -->
<script>
    let modalBtns = [...document.querySelectorAll(".button")];
    modalBtns.forEach(function (btn) {
      btn.onclick = function () {
        let modal = btn.getAttribute("data-modal");
        document.getElementById(modal).style.display = "block";
      };
    });
    let closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function (btn) {
      btn.onclick = function () {
        let modal = btn.closest(".modal");
        modal.style.display = "none";
      };
    });
    window.onclick = function (event) {
      if (event.target.className === "modal") {
        event.target.style.display = "none";
      }
    };
  </script>


</body>
</html>