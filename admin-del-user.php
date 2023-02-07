<?php 
    if (isset($_GET['del'])) {
    $del_user = $_GET['del'];
    $sql1_del_user = "DELETE FROM user WHERE user_id = '$del_user' ";
    mysqli_query($conn, $sql1_del_user) or die(mysqli_error($conn));
    header('location:admin-home?page=del_user');
    }
 $sql_del_user = "SELECT * from user";
 $result = mysqli_query($conn, $sql_del_user) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) : 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style-table.css">
        <title>. : Admin Control : .</title>
    </head>
    <body>
        <table>
            <tr>
                <th>รหัสผู้ใช้</th>
                <th>รหัสผ่าน</th>
                <th>ชื่อ</th>
                <th>ระดับผู้ใช้</th>
                <th>รหัสห้อง</th>
                <th>พิกัดละติจูด</th>
                <th>พิกัดลองจิจูด</th>
                <th>เวลาเช็คชื่อ</th>
                <th>สถานะเช็คชื่อ</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <tr>
                <td><?php echo $row['user_username']?></td>
                <td><?php echo $row['user_password']?></td>
                <td><?php echo $row['user_name']?></td>
                <td><?php echo $row['user_status']?></td>
                <td><?php echo $row['user_r_code']?></td>
                <td><?php echo $row['user_latitude']?></td>
                <td><?php echo $row['user_longitude']?></td>
                <td><?php echo $row['user_time']?></td>
                <td><?php echo $row['user_checkstatus']?></td>
                <td>
                    <a href="admin-home?page=edit_user&edit=<?php echo $row['user_id']?>">
                    <button type="submit">edit</button></a>
                </td>
                <td>
                    <a href="admin-home?page=del_user&del=<?php echo $row['user_id']?>">
                    <button type="submit">delete</button></a>
                </td>
            </tr>
        </table>
    </body>
    </html>
    <?php 
    endwhile;
?>