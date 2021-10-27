<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteAd = "DELETE from admin where adminId = '$id'";
    mysqli_query($conn,$deleteAd);
    header('location: admin-table.php');
}
?>