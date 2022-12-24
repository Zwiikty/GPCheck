<?php require_once("conn.php"); 
   if (isset($_GET['roomdetails'])) {
        $roomdetails = $_GET['roomdetails'];
        $sql = "select user_username,user_name,user_latitude,user_longitude,user_time,user_checkstatus from user where user_r_code = '$roomdetails'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result)) :
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-table.css">
    <title>. : Teacher Control : .</title>
</head>
<body>
<br>
<br>
    <table >
        <tr>
            <th><h3>รหัสนักศึกษา</h3></th>
            <th><h3>ชื่อ-นามสกุล</h3></th>
            <th><h3>ระยะห่าง</h3></th>
            <th><h3>เวลาเช็คชื่อ</h3></th>
        </tr>
        <tr>
            <td><?php echo $row['user_username']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['user_username']?></td>
            <td><?php echo $row['user_time']?></td>
        </tr>
    </table>

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


</body>
</html>
        <?php endwhile; 
    }
?>