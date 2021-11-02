<?php 
require '../../db/config.php';
$cmtId = $_GET['cmtId'];
$sql = "DELETE FROM comment WHERE cmtId = $cmtId ";
$result = $conn->query($sql);
header('location:../profile-user.php?route=comment');
?>
   