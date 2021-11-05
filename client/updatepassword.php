<?php

require('../DB/config.php');

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    if (isset($_POST['changePass'])) {
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];

        if (empty($password)) {
            $error['password'] = 'Vui lòng nhập trường này';
        }

        if (empty($newpassword)) {
            $error['newpassword'] = 'Vui lòng nhập trường này';
        }


        if ($password != $newpassword) {
            $error['confirm'] = 'Vui lòng nhập lại';
        } else {
            
            $pass = password_hash($password, PASSWORD_DEFAULT);

            $sql = "SELECT * FROM users WHERE vKey = '$code'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $update_user_level = "UPDATE users set passWord = '$pass' where vKey = '$code'";
                mysqli_query($conn, $update_user_level);
                header('location: ../admin/login.php');
            }
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-signin {
            margin: 0 auto;
            background: #F0F8FF;
            width: 350px;
            padding: 20px;
        }

        .danger {
            color: red;
            margin-bottom: 20px;
            font-family: sans-serif;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="form-signin">
            <h3>Đổi mật khẩu của bạn</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu mới</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <span class="danger"> <?php echo (isset($error['password'])) ? $error['password'] : '';
                                            ?> </span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Xác nhận mật khẩu mới</label>
                    <input type="password" name="newpassword" class="form-control" id="password" required>
                    <span class="danger"> <?php echo (isset($error['newpassword'])) ? $error['newpassword'] : '';
                                            ?> </span>
                    <span class="danger"> <?php echo (isset($error['confirm'])) ? $error['confirm'] : '';
                                            ?> </span>
                </div>
                <button type="submit" name="changePass" class="btn btn-success">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>