<?php
// include('./layout/header.php');
require('../db/config.php');

$error = [];

if (isset($_POST['update_admin'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $file = $_FILES['file'];
    $id = $_POST['id'];

    if (empty($email)) $error['email'] = "Vui lòng nhập trường này!";
    if (empty($fullName)) $error['fullName'] = "Vui lòng nhập trường này!";
    if (empty($password)) $error['password'] = "Vui lòng nhập trường này!";

    $tmp = $_FILES['file']['tmp_name'];

    if ($tmp != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
        $path = 'uploads/';

        $img = $_FILES['file']['name'] ? $_FILES['file']['name'] : '';


        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        $final_image = rand(1000, 1000000) . $img;
        if (in_array($ext, $valid_extensions)) {
            $path = $path . strtolower($final_image);
            if (move_uploaded_file($tmp, $path)) {
                $update = "UPDATE admin set email = '$email',fullName = '$fullName',avatarAdmin='$path' where adminId = '$id'";
            }
        } else {
            $error['file'] = 'file không đúng định dạng';
        }
    } else {

        $update = "UPDATE admin set email = '$email',fullName = '$fullName' where adminId = '$id'";
    }

    $id = $_SESSION['admin']['adminId'];
    $selectImg = "SELECT * FROM admin where adminId = '$id'";
    $update_img = mysqli_query($conn, $selectImg);
    $admin = mysqli_fetch_assoc($update_img);
    if ($update_img) {
        $_SESSION['admin'] = $admin;
    }

    if (mysqli_query($conn, $update)) {
        header('location: admin-table.php');
    }
}

?>