<?php include '../admin/layout/header.php';
$path = '../admin/'; ?>

<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Xin chào!!</h4>
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="img_profile">
                        <div class="first-left">
                            <div class="picture_user"><img src="<?php echo $_SESSION['admin']['avatarAdmin'] ?>" alt=""></div>
                            <div class="user_name"><span><?php echo $_SESSION['admin']['fullName'] ?></span>
                                <!-- <p><?php echo $_SESSION['admin']['phone'] ?></p> -->
                            </div>
                        </div>
                        <a href="app-profile.php?route=editPicture">
                            <div class="comment_user sitting">
                                <h3><i class="fa fa-shopping-cart" aria-hidden="true"></i></h3>
                                <span >Thay ảnh đại diện</span>
                            </div>
                        </a>
                        <a href="app-profile.php?route=editProfile">
                            <div class="comment_user sitting">
                                <h3><i class="fa fa-cog" aria-hidden="true"></i></h3>
                                <span >Chỉnh sửa</span>
                            </div>
                        </a>
                        <a href="../admin/logout.php">
                            <div class="comment_user sitting">
                                <h3><i class="fa fa-sign-out" aria-hidden="true"></i></h3>
                                <span >Đăng xuất</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <?php
                    if (isset($_GET['route'])) {
                        if ($_GET['route'] == 'editProfile' || $_GET['route'] == '') {
                            include('./profile_admin/editProfile.php');
                        }
                        if ($_GET['route'] == 'editPicture') {
                            include('./profile_admin/edit-picture.php');
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<?php include '../admin/layout/footer.php' ?>