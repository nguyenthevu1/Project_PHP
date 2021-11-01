<?php
require('../db/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteCmt = "DELETE from comment where cmtId = '$id'";
    mysqli_query($conn,$deleteCmt);
    header('location: comment-table.php');
}
?>