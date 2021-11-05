<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
            crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>
    <?php
if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];
    include('../db/config.php');
    $sql = "SELECT * FROM users WHERE status = 0 AND vkey = '$vkey' LIMIT 1";
    $query = mysqli_query($conn , $sql);
    $result = mysqli_num_rows($query);
    if($result == 1){
        $update = "UPDATE users SET status = 1 WHERE vkey = '$vkey' LIMIT 1";
        $querydb = mysqli_query($conn , $update);
        if($querydb){
          
            echo'<div class="container text-center mt-5">
                    <h6>Đã đăng ký tài khoản thành công</h6>
                    <p>Vui lòng bấm vào link bên dưới để về trang đăng nhập</p>
                    <button class="btn btn-success"><h6><a href="../admin/login.php" style="text-decoration: none; color:white;">Quay về trang đăng nhập</a></h6></button>
                </div> ' ;
        }
        
    }


    else{
        echo "This account invalid or already verified";
    }
}
else{
    die("Some thing went wrong");
}
?>
        
    </body>
</html>