<?php
include '../db/config.php';
session_start();
$id = $_SESSION['user']['userId'];

if (isset($_POST['fullName'])) {
    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $sql = "UPDATE users SET fullName = '$name' WHERE userId = $id";
    $result = $conn->query($sql);
    $select = "SELECT * FROM users WHERE userId = $id";
    $query = $conn->query($select);
    $newData = $query->fetch_assoc();
    $_SESSION['user'] = $newData;
    header('location:../admin/app-profile.php?route=editProfile');
}

if (isset($_POST['phone'])) {
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $sql = "UPDATE users SET phone = '$phone' WHERE userId = $id";
    $result = $conn->query($sql);
    $select = "SELECT * FROM users WHERE userId = $id";
    $query = $conn->query($select);
    $newData = $query->fetch_assoc();
    $_SESSION['user'] = $newData;
    header('location:../admin/app-profile.php?route=editProfile');
}

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE users SET email = '$email' WHERE userId = $id";
    $result = $conn->query($sql);
    $select = "SELECT * FROM users WHERE userId = $id";
    $query = $conn->query($select);
    $newData = $query->fetch_assoc();
    $_SESSION['user'] = $newData;
    header('location:../admin/app-profile.php?route=editProfile');
}
