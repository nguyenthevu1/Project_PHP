<?php
require('../db/config.php');
session_start();
if (isset($_POST['update_pass'])) {

    $currentPass = $_POST['currentPass'];
    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $id = $_POST['id'];

    if (empty($currentPass)){
        $_SESSION['currentPass'] = "Vui lòng nhập trường này!";
        header('location: changePassword.php?id='.$id);
    } 

    if (empty($newPass)){
        $_SESSION['newPass'] = "Vui lòng nhập trường này!";
        header('location: changePassword.php?id='.$id);
    } 
    if (empty($confirmPass)){
        $_SESSION['confirmPass'] = "Vui lòng nhập trường này!";
        header('location: changePassword.php?id='.$id);
    } 

    $select_pass = "SELECT * from users where userId = '$id'";

    $forgotPas = mysqli_query($conn, $select_pass);

    $pass_hash = mysqli_fetch_assoc($forgotPas);

    if (password_verify($currentPass, $pass_hash['passWord'])) {
        if ($currentPass != '' && $newPass != '' && $confirmPass != '') {
            if($newPass === $confirmPass) {
                $hasPwd = password_hash($newPass, PASSWORD_DEFAULT);
                $changePass = "UPDATE users set password = '$hasPwd' where userId='$id'";
                mysqli_query($conn,$changePass);
                if($_SESSION['user']['userId'] == $id){
                    unset($_SESSION['user']);
                }
                header('location: login.php');
            }
            else{
                $_SESSION['confirmPass'] = "Vui lòng nhập lại!";
                header('location: changePassword.php?id='.$id);
            }
        } 
    } else {
        $_SESSION['currentPass'] = 'Mật khẩu sai!';
        header('location: changePassword.php?id='.$id);
    }
}
