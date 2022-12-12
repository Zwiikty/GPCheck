<?php 
 require_once("conn.inc.php");
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
    <link rel="stylesheet" href="style-create-room.css">
    
</head>
<body>
<div id="toggle"></div>
  <div id="sidebar">
      <ul>
          <li><a href="home.html.php">Home</a></li>
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
    <a href="room-list.php?roomdetails=<?php echo $row['r_code'];?>">
    <button class="button">รายละเอียด</button></a>
    <a href="room-list.php?room_del=<?php echo $row['r_code'];?>">
    <button type="submit">ลบห้อง</button></a>
    </section>
</div>
  </main>
<?php  endwhile; ?>
 
<!-- pop up list-->
<?php 
    if (isset($_GET['roomdetails'])) { ?>
  <div id="modalroomlist" class="modal">
    <div class="modal-content">
      <div class="contact-form">
        <a class="close">&times;</a>
          <h2>Create room : </h2>
          <div>
            <input class="fname" type="text" name="r_name" placeholder="ชื่อห้อง" />
            <input type="datetime-local" name="datetime" placeholder="วันที่/เวลา" />
          </div>
          <button type="submit" name="roomsubmit" onclick="">Submit</button>
      </div>
    </div>
  </div>
  <?php } ?>
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
