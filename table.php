<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Table</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>
 
<body>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
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
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>2011/07/25</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>2009/01/12</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>2012/03/29</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>2008/11/28</td>
            </tr>
        </tbody>
    </table>
    <script>
        
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>
</body>
 
</html>