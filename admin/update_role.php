<?php
session_start();
require('../db/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select_role = "SELECT * FROM users where userId = '$id'";
    $role = mysqli_query($conn, $select_role);
    $select = mysqli_fetch_assoc($role);

    if ($_SESSION['admin']['role'] == 1) {
        $role = $select['role'] ? 0 : 1;
        $update_role = "UPDATE users set role = '$role' where userId = '$id'";
        mysqli_query($conn, $update_role);

        $adminId = $select['adminId'];
        $select_role_2 = "SELECT * FROM users where userId = '$adminId'";
        $role_2 = mysqli_query($conn, $select_role);
        $select_2 = mysqli_fetch_assoc($role_2);
    }
    header('location: admin-table.php');
}
