<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteAd = "DELETE from users where userId = '$id'";
    mysqli_query($conn,$deleteAd);
    header('location: user-table.php');
}
?>