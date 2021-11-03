<?php
include '../../db/config.php';
if(isset($_GET['productId'])){
    $productId = $_GET['productId'];
    $sql = "DELETE FROM producttaken WHERE proTakenId = $productId";
    $query = $conn->query($sql);
    header('location:../profile-user.php?route=order');
}