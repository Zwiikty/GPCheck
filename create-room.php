<?php 
 require_once("function.php");
 //geolocation
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


 if (isset($_POST['roomsubmit'])){
    $username = $_SESSION['NAME'];
    $roomname = $_POST['r_name'];
    $datetime = $_POST['datetime'];

    $sql = "insert into room (r_code,r_name,r_time,r_latitude,r_longitude,r_teacher) values('$roomcode','$roomname','$datetime','$lat','$lon','$username')";
    mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header('location:home.html.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="home-index-style.css" rel="stylesheet">
    <link href="style-create-room.css" rel="stylesheet">
</head>
<body>
<div class="container">
      <div class="card">
          <div class="face face1">
              <div class="content">
                  <center><img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true"></center>
                  <h3>Create Room</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
              <p>
    <button class="button" data-modal="modalOne">Click here to create room!</button>
  </p>
              </div>
          </div>
      </div>
      <div id="modalOne" class="modal">
    <div class="modal-content">
      <div class="contact-form">
        <a class="close">&times;</a>
        <form method="POST">
          <h2>Create room : </h2>
          <div>
            <input class="fname" type="text" name="r_name" placeholder="ชื่อห้อง" />
            <input type="datetime-local" name="datetime" placeholder="วันที่/เวลา" />
          </div>
          <button type="submit" name="roomsubmit" onclick="">Submit</button>
        </form>
      </div>
    </div>
  </div>
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

  </script>
      <!-- card2 -->
      <div class="card">
          <div class="face face1">
              <div class="content">
              <center><img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true"></center>
                  <h3>Room List</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
              <p>
                <a href="room-list.php">
    <button class="button" data-modal="modalTwo" >Click here !</button></a>
  </p>
              </div>
          </div>
      </div>
      
      <!-- card3 -->
      <div class="card">
          <div class="face face1">
              <div class="content">
                  <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                  <h3>Launch</h3>
              </div>
          </div>
          <div class="face face2">
              <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                      <a href="#">Read More</a>
                      
                    
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


              </div>
          </div>
      </div>
  </div>
</body>
</html>