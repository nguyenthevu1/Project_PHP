<?php
session_start();
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
            <form action="./sendEmail.php" method="POST">
                <div class="mb-3">
                    <label for="forgotMail" class="form-label">Email</label>
                    <input type="text" name="forgotMail" class="form-control" id="forgotMail" placeholder="Email">
                    <span class="danger"> <?php echo (isset($_SESSION['errorEmail'])) ? $_SESSION['errorEmail'] : '';
                                            unset($_SESSION['errorEmail']);
                                            ?> </span>
                </div>
                <button type="submit" name="forgot" class="btn btn-success">Đổi mật khẩu</button>
            </form>
            <div>
                <p class="mt-3">Bạn chưa có tài khoản?<a href="./register-users.php">Đăng ký</a></p>
                <p class="mt-3">Bạn đã có tài khoản?<a href="../admin/login.php">Đăng nhập</a></p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>