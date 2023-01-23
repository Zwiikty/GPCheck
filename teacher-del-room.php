<?php 
    if (isset($_GET['room_del'])) {
        $room_del = $_GET['room_del'];
        $sql2 = "delete from room where r_code = '$room_del'";
        $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
    }
?>