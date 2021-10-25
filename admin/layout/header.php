<?php
session_start();
if (!$_SESSION['user']) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                    <span><?php echo $_SESSION['user']['fullName']; ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.php" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Quản trị viên</span>
                                    </a>
                                    <a href="./logout.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Đăng xuất</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Bảng điều kiển chính</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-speedometer"></i><span class="nav-text">Bảng điều kiển</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./index.php">Bảng điều kiển</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Qản lý quản trị viên</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-user"></i><span class="nav-text">Quản trị viên</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../admin/admin-table.php">Danh sách quản trị</a></li>
                            <li><a href="./ui-alert.php">Thêm quản trị</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Quản lý người dùng</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-people"></i><span class="nav-text">Người dùng</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Danh sách người dùng</a></li>
                            <li><a href="./ui-alert.php">Thêm người dùng</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Ứng dụng</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Ứng dụng</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.php">Hồ sơ</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Các thành phần</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-bookmarks"></i><span class="nav-text">Danh mục</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Danh sách danh mục</a></li>
                            <li><a href="./ui-alert.php">Thêm danh mục</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Khách sạn</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Danh sách các khách sạn</a></li>
                            <li><a href="./ui-alert.php">Thêm</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">dịch vụ</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Danh sách dịch vụ</a></li>
                            <li><a href="./ui-alert.php">Thêm dịch vụ</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-file-earmark"></i><span class="nav-text">Đơn hàng</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Danh sách đơn hàng</a></li>
                            <li><a href="./ui-alert.php">Cập nhật đơn hàng</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Đánh giá</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Đánh giá</a></li>
                            <li><a href="./ui-alert.php">Cập nhật</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Khác</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Đăng nhập</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.php">Đăng nhập</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>


        <!--**********************************
            Sidebar end
        ***********************************-->