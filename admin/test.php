<?php
// include('./layout/header.php');
require('../db/config.php');

$error = [];
if (isset($_POST['update_room'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $file = $_FILES['files'];
    $catId = $_POST['catId'];
    $level = $_POST['level'];

    $id = $_POST['id'];
    // echo $level;
    // print_r($_POST['id']);
    // die();
    if (empty($title)) $error['title'] = "Vui lòng nhập trường này!";
    if (empty($price)) $error['price'] = "Vui lòng nhập trường này!";
    if (empty($content)) $error['content'] = "Vui lòng nhập trường này!";

    if ($title != '' && $price != '' && $content != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');

        $path = 'uploads/';

        $img = $_FILES['files']['name'];
        $tmp = $_FILES['files']['tmp_name'];
        $pathImg = [];
        foreach ($img as $key => $value) {
            $tmp = $_FILES['files']['tmp_name'][$key];
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));

            $final_image = rand(1000, 1000000) . $value;

            if (in_array($ext, $valid_extensions)) {
                $path = $path . strtolower($final_image);
                $pathImg[$key] = $path;
                move_uploaded_file($tmp, $path);
            }
        }

        // print_r($pathImg);
        // die();

        $update = "UPDATE product set catId = '$catId', productName = '$title', price = '$price',
                content = '$content',level = '$level' where productId = '$id'";
        mysqli_query($conn, $update);

        // $id_pro =  mysqli_insert_id($conn);
        
        foreach ($pathImg as $key => $value) {
            mysqli_query($conn, "INSERT into img_product(productId,img) values('$id','$value')");
        }
    }
}