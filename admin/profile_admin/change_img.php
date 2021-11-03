<?php
require('../../db/config.php');

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
        echo $final_img;

        if (in_array($ext, $valid_extensions)) {
            // $path = $path . strtolower($final_img);

            if (move_uploaded_file($tmp, $path.$img)) {

                // $update = "UPDATE admin set avatarAdmin='$path' where adminId = '$id'";
                // $update_picture = mysqli_query($conn,$update);

            }
        } else {
            $error['file'] = 'file không đúng định dạng';
        }
    } else {
        header('location: ');
    }
}