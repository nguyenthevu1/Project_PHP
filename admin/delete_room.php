<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $deletePrImg = "DELETE from img_product where productId = '$id'";
    mysqli_query($conn,$deletePrImg);
    
    $deletePr = "DELETE from product where productId = '$id'";
    mysqli_query($conn,$deletePr);
    
    header('location: room-table.php');
}
?>