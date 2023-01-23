<?php 
 require_once("conn.php");

#------delete room------
 if (isset($_GET['room_del'])) {
  $room_del = $_GET['room_del'];
  $sql2 = "delete from room where r_code = '$room_del'";
  $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
}
#------delete room------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. : Teacher Control : .</title>
    <link href="style/style-student-home.css" rel="stylesheet">
    <link href="style/style-home.css" rel="stylesheet">
    <link href="style/style-create-room.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style-grid.css">
</head>
<body>
<!-- side bar -->
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
$username = $_SESSION['NAME'];
$sql = "select * from room where r_teacher = '$username'";
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) :
?>
  <div class="grid-item">
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
  </div>
<?php  endwhile; ?>
</div>
 <!-- Display-->

</body>
</html>