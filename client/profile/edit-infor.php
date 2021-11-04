<?php
include '../../db/config.php';
session_start();
$id = isset($_SESSION['user']['userId']) ? $_SESSION['user']['userId'] : '';
if ($id) {
    if (isset($_POST['fullName'])) {
        $name = mysqli_real_escape_string($conn, $_POST['fullName']);
        $sql = "UPDATE users SET fullName = '$name' WHERE userId = $id";
        $result = $conn->query($sql);
        $select = "SELECT * FROM users WHERE userId = $id";
        $query = $conn->query($select);
        $newData = $query->fetch_assoc();
        $_SESSION['user'] = $newData;
        header('location:../profile-user.php?route=editProfile');
    }

    if (isset($_POST['phone'])) {
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $sql = "UPDATE users SET phone = '$phone' WHERE userId = $id";
        $result = $conn->query($sql);
        $select = "SELECT * FROM users WHERE userId = $id";
        $query = $conn->query($select);
        $newData = $query->fetch_assoc();
        $_SESSION['user'] = $newData;
        header('location:../profile-user.php?route=editProfile');
    }

    if (isset($_POST['email'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "UPDATE users SET email = '$email' WHERE userId = $id";
        $result = $conn->query($sql);
        $select = "SELECT * FROM users WHERE userId = $id";
        $query = $conn->query($select);
        $newData = $query->fetch_assoc();
        $_SESSION['user'] = $newData;
        header('location:../profile-user.php?route=editProfile');
    }

    if (isset($_POST['changePass'])) {
        
        $currentPass = mysqli_real_escape_string($conn, $_POST['currentPass']);
        $newPass = $_POST['NewPass'];
        $confirmPass = $_POST['confirmPass'];
        
        if (empty($currentPass)) {
            header('location: ../profile-user.php?route=editProfile');
        }

        if (empty($newPass)) {
            header('location: ../profile-user.php?route=editProfile');
        }
        if (empty($confirmPass)) {
            header('location: ../profile-user.php?route=editProfile');
        }


        $select_pass = "SELECT * from users where userId = '$id'";

        $forgotPas = mysqli_query($conn, $select_pass);

        $pass_hash = mysqli_fetch_assoc($forgotPas);

        if (password_verify($currentPass, $pass_hash['passWord'])) {
            if ($currentPass != '' && $newPass != '' && $confirmPass != '') {
                if ($newPass === $confirmPass) {

                    $hasPwd = password_hash($newPass, PASSWORD_DEFAULT);
                    $changePass = "UPDATE users set password = '$hasPwd' where userId='$id'";
                    mysqli_query($conn, $changePass);
                    if ($_SESSION['user']['userId'] == $id) {
                        unset($_SESSION['user']);
                    }
                    header('location: ../index.php');
                } else {
                    header('location: ../profile-user.php?route=editProfile');
                }
            }
        } else {
            header('location: ../profile-user.php?route=editProfile');
        }
    }
} else {
    header('location: ../index.php');
}
