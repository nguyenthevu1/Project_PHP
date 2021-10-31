<?php
require('../db/config.php');

$error = [];
if (isset($_POST['add_admin'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $password = $_POST['password'];
    $file = $_FILES['file'];

    if (empty($email)) $error['email'] = "Vui lòng nhập trường này!";
    if (empty($fullName)) $error['fullName'] = "Vui lòng nhập trường này!";
    if (empty($password)) $error['password'] = "Vui lòng nhập trường này!";

    

    $select_email = "SELECT * from admin where email = '$email'";
    $email_q = mysqli_query($conn, $select_email);

    if ($email != '' && $fullName != '' && $password != '') {

        if (mysqli_num_rows($email_q) < 1) {
            $img = $_FILES['file']['name'];
            $hasPwd = password_hash($password, PASSWORD_DEFAULT);
            if ($img != '') {

                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
                $path = 'uploads/';

                $tmp = $_FILES['file']['tmp_name'];


                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                if (in_array($ext, $valid_extensions)) {

                    $path = $path . strtolower($final_image);
                    if (move_uploaded_file($tmp, $path)) {
                        $addAdmin = "INSERT into admin(email,fullName,password,avatarAdmin)
                                values('$email','$fullName','$hasPwd`','$path')";
                    }
                } else {
                    $error['file'] = 'file lỗi định dạng';
                }
            } else {
                $path = 'uploads/incognito.png';
                $addAdmin = "INSERT into admin(email,fullName,password,avatarAdmin)
                                values('$email','$fullName','$hasPwd','$path')";
            }
            mysqli_query($conn, $addAdmin);

            header('location: admin-table.php');

        } else {
            $error['email'] = 'Email đã tồn tại';
        }
    }
}