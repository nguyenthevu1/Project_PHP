<?php
require('../db/config.php');

if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $deleteCat = "DELETE from categories where catId = $id";
    mysqli_query($conn,$deleteCat);
    header('location: categories-table.php');
}
?>




<!-- catId	
catName -->