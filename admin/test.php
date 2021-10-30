<?php
// include('./layout/header.php');
require('../db/config.php');
session_start();
$error = [];
if (isset($_POST['update_pass'])) {

    $currentPass = $_POST['currentPass'];
    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $id = $_POST['id'];

    if (empty($currentPass)) $error['currentPass'] = "Vui lòng nhập trường này!";
    if (empty($newPass)) $error['newPass'] = "Vui lòng nhập trường này!";
    if (empty($confirmPass)) $error['confirmPass'] = "Vui lòng nhập trường này!";

    $select_pass = "SELECT * from admin where adminId = '$id'";
    $forgotPas = mysqli_query($conn, $select_pass);
    $pass_hash = mysqli_fetch_assoc($forgotPas);

    if (password_verify($currentPass, $pass_hash['password'])) {
        if ($currentPass != '' && $newPass != '' && $confirmPass != '') {
            if($newPass === $confirmPass) {
                $hasPwd = password_hash($newPass, PASSWORD_DEFAULT);
                $changePass = "UPDATE admin set password = '$hasPwd' where adminId='$id'";
                mysqli_query($conn,$changePass);
                if($_SESSION['user']['adminId'] == $id){
                    session_destroy();
                }
                header('location: index.php');
            }
            else{
                $error['confirmPass'] = "Vui lòng nhập lại!";
            }
        } 
    } else {
        $error['currentPass'] = 'Mật khẩu sai!';
    }
}