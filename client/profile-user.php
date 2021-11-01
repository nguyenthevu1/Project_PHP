<?php include 'header.php'; ?>
<div class="container">
    <div class="profile">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="img_profile">
                    <div class="first-left">
                        <div class="picture_user"><img src="./images/photos/incognito.png" alt=""></div>
                        <div class="user_name"><span>Nguyen The Vu</span>
                            <p>0376192789</p>
                        </div>
                    </div>
                    <a href="profile-user.php?route=order">
                        <div class="comment_user sitting">
                            <h3><i class="fa fa-shopping-cart" aria-hidden="true"></i></h3>
                            <span>Danh sách giao dịch</span>
                        </div>
                    </a>
                    <a href="profile-user.php?route=comment">
                        <div class="comment_user">
                            <h3><i class="fa fa-bookmark-o" aria-hidden="true"></i></h3>
                            <span>Danh sách bình luận</span>
                        </div>
                    </a>
                    <a href="profile-user.php?route=editProfile">
                        <div class="comment_user sitting">
                            <h3><i class="fa fa-cog" aria-hidden="true"></i></h3>
                            <span>Chỉnh sửa</span>
                        </div>
                    </a>
                    <a href="./log-out-users.php">
                        <div class="comment_user sitting">
                            <h3><i class="fa fa-sign-out" aria-hidden="true"></i></h3>
                            <span>Đăng xuất</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <?php
                if (isset($_GET['route'])) {
                    if ($_GET['route'] == 'editProfile' || $_GET['route'] == '') {
                        include('./profile/editProfile.php');
                    }
                    if ($_GET['route'] == 'order') {
                        include('./profile/table-order.php');
                    }
                    if ($_GET['route'] == 'comment') {
                        include('./profile/comment-table.php');
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>