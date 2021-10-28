<?php
require('../db/config.php');


if (isset($_POST['add_hotel'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $file = $_FILES['files'];
    $catId = $_POST['catId'];
    $level = $_POST['level'];

    if ($title != '' && $price != '' && $content != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
        $path = 'uploads/';

        $img = $_FILES['files']['name'];

        foreach ($img as $key => $value) {
            $tmp = $_FILES['files']['tmp_name'][$key];
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));

            $final_image = rand(1000, 1000000) . $value;

            if (in_array($ext, $valid_extensions)) {
                $path = $path . strtolower($final_image);
                move_uploaded_file($tmp, $path);
            }
        }
        $add = "INSERT into product(catId, productName, price, content,level)
                        values('$catId','$title','$price','$content','$level')";
        mysqli_query($conn, $add);

        $id_pro =  mysqli_insert_id($conn);
        foreach ($img as $key => $value) {
            $path = $path . strtolower($value);
            mysqli_query($conn,"INSERT into img_product(productId,img) values('$id_pro','$path')");
        }

    }
}
