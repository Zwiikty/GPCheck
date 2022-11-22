<?php 
 require_once("conn.inc.php");
 require_once("create-room.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="home-style.css" rel="stylesheet">
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
</body>
</html>