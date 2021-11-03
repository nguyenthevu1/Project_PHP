<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $deletePrImg = "DELETE from producttaken where proTakenId = '$id'";
    mysqli_query($conn,$deletePrImg);
    header('location: order-table.php');
}
?>