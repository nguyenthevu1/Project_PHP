<?php
require('../db/config.php');
session_start();
if (!$_SESSION['user']) {
  header("location:login-users.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Holiday Crown | Best hotel in Dubai</title>

  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- font awesome -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

  <!-- uniform -->
  <link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

  <!-- animate.css -->
  <link rel="stylesheet" href="assets/wow/animate.css" />


  <!-- gallery -->
  <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/style.css">

</head>
<style>
  .img-user {
    border-radius: 50%;
    border: 2px solid rgb(192, 189, 189);
    width: 30px;
  }
</style>

<body id="home">

  <!-- header -->
  <nav class="navbar  navbar-default" role="navigation">
    <div class="container" style="width:1220px">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="holiday crown"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav" style="width:550px">
          <li><a href="index.php">Trang chủ </a></li>
          <li><a href="rooms-tariff.php">Phòng</a></li>
          <li><a href="gallery.php">Sự kiện</a></li>
          <li><a href="contact.php">Dịch vụ</a></li>
          <li><a href="introduction.php">Giới thiệu</a></li>
          <li><a href="contact.php">Liên hệ</a></li>

        </ul>
        <ul class="nav navbar-nav" style="margin-left: 60px;">
          <li class="account" style="margin-top:20px">
            <!-- style="margin-left: 25px;margin-top: 25px;" -->
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color:rgb(115,114,108); background-color:rgb(238,238,238); font-size:17px">
                <img class="img-user" src="<?php
                                            $path = "../admin/";
                                            echo $path . $_SESSION['user']['avatarUser'];
                                            ?>">
                <?php echo $_SESSION['user']['fullName'] ?>
                <!-- <span class="caret"></span> -->
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="color:rgb(115,114,108);">
                <li><a href="profile-user.php?route=editProfile">Tài khoản</a></li>
                <li><a href="log-out-users.php">Đăng xuất</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- Wnavbar-collapse -->
    </div><!-- container-fluid -->
  </nav>
  <!-- header -->