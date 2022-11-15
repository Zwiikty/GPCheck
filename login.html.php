<?php 
    require_once("login.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <center><h1>Login</h1>
    <form action="" method="post">
        <div class = "col-sm-3" class= "left">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control">
        </div>
        <div class="col-sm-3" class="left">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div> <br>
        <input type="submit" value="login" name="login" class="btn btn-success">
    </form>
    </center>
</body>
</html>