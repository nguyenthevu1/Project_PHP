<?php include 'header.php';
$path = '../admin/';

?>
<div class="container">
    <div class="profile">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="img_profile">
                    <div class="first-left">
                        <div class="picture_user">
                            <img src="<?php echo  isset($_SESSION['user']['avatarUser'])?$path .$_SESSION['user']['avatarUser']:''; ?>" alt="">
                            <form action="update_avatar.php" method="POST" style="margin-top:10px;" id="formChange" enctype="multipart/form-data">
                                <input type="file" id="file" name="file" style="width: 250px;">
                                <input type="hidden" name="id" value="<?php echo isset($_SESSION['user']['userId'])?$_SESSION['user']['userId']:''; ?>" >
                                <button type="submit" name="changeImg">lưu</button>
                            </form>
                        </div>
                        <div class="user_name"><span><?php echo isset($_SESSION['user']['fullName'])?$_SESSION['user']['fullName']:''; ?></span>
                            
                            <p><?php echo isset($_SESSION['user']['phone'])?$_SESSION['user']['phone']:''; ?></p>
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