<?php 
    if (isset($_GET['del'])) {
    $del_room = $_GET['del'];
    $sql1_del_room = "DELETE FROM room WHERE r_id = '$del_room' ";
    mysqli_query($conn, $sql1_del_room) or die(mysqli_error($conn));
    header('location:admin-home.php?page=del_room');
    }
 $sql_del_room = "SELECT * from room";
 $result = mysqli_query($conn, $sql_del_room) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) : 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style-table.css">
        <title>. : Admin Control : .</title>
    </head>
    <body>
        <table>
            <tr>
                <th>รหัสห้อง</th>
                <th>ชื่อห้อง</th>
                <th>เวลาสร้างห้อง</th>
                <th>พิกัดละติจูด</th>
                <th>พิกัดลองจิจูด</th>
                <th>ชื่ออาจารย์</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <tr>
                <td><?php echo $row['r_code']?></td>
                <td><?php echo $row['r_name']?></td>
                <td><?php echo $row['r_time']?></td>
                <td><?php echo $row['r_latitude']?></td>
                <td><?php echo $row['r_longitude']?></td>
                <td><?php echo $row['r_teacher']?></td>
                <td>
                    <a href="admin-home.php?page=edit_room&edit=<?php echo $row['r_id']?>">
                    <button type="submit">edit</button></a>
                </td>
                <td>
                    <a href="admin-home.php?page=del_room&del=<?php echo $row['r_id']?>">
                    <button type="submit">delete</button></a>
                </td>
            </tr>
        </table>
    </body>
    </html>
    <?php 
    endwhile;
?>