<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteImg_product = "DELETE from img_product where imgId = '$id'";
    mysqli_query($conn,$deleteImg_product);
    header('location: update_room.php?id='.$deleteImg_product['productId']);
}
?>