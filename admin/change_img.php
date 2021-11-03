<?php
require('../db/config.php');
session_start();
$error = [];
if (isset($_POST['edit_picture'])) {
    $file = $_FILES['file'];
    $id = $_POST['id'];

    // $img = $_FILES['file']['name'];

    $tmp = $_FILES['file']['tmp_name'];

    if ($tmp != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
        $path = 'uploads/';

        $img = $_FILES['file']['name'] ? $_FILES['file']['name'] : '';


        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $final_img = rand(1,100).$img ;


        if (in_array($ext, $valid_extensions)) {
            $path = $path . strtolower($final_img);

            if (move_uploaded_file($tmp, $path)) {
                $update = "UPDATE admin set avatarAdmin='$path' where adminId = '$id'";
                $update_picture = mysqli_query($conn,$update);

                $select_img = "SELECT * from admin where adminId = '$id'";
                $img_admin = mysqli_query($conn,$select_img);
                $admin = mysqli_fetch_assoc($img_admin);

                $_SESSION['admin'] = $admin;

                header('location: app-profile.php?route=editPicture');
            }
        } else {
            $error['file'] = 'file không đúng định dạng';
        }
    } 
}