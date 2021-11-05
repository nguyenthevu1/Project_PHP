<style>
    .star_chk {
        width: 30px;
        color: rgb(222, 219, 211);
    }

    .star_chk.active {
        color: rgb(226, 226, 14);
        width: 30px;
    }
</style>
<div class="comment">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <?php

                            $sql = "SELECT * FROM comment,users WHERE comment.userId = users.userId ";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            ?>
                            <div class="text-center cmt">
                                <img src="<?php echo $row['avatarUser']; ?>" alt="picture" class="img_user">
                                <div class="cmtText">
                                    <?php if (!empty($row['fullName']) || !empty($row['date']) || !empty($row['rating'])) { ?>
                                        <span style="color:black"><?php echo $row['fullName'] ?></span>
                                        <span style="font-size: 80%;"><?php echo $row['date'] ?></span>
                                        <p>
                                            <?php
                                            $rating = $row['rating'];
                                            for ($i = 0; $i < $rating; $i++) {
                                                echo '<i class="fa fa-star"></i>';
                                            }
                                            for ($i = 5; $i > $rating; $i--) {
                                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            }
                                            ?>
                                        </p>

                                        <p style="user-select:auto"><?php echo $row['comment'] ?></p>
                                    <?php } else {
                                    ?>
                                        <p style="user-select:auto"> Không có bình luận để hiển thị</p>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <?php
                        $sql = "SELECT * FROM comment,users WHERE comment.userId = users.userId LIMIT 1,50";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="item">
                                <div class="text-center cmt">

                                    <img src="./images/photos/incognito.png" alt="picture" class="img_user">
                                    <div class="cmtText">
                                        <span style="color:black"><?php echo $row['fullName'] ?></span>
                                        <span style="font-size: 80%;"><?php echo $row['date'] ?></span>
                                        <p>
                                            <?php
                                            $rating = $row['rating'];
                                            for ($i = 0; $i < $rating; $i++) {
                                                echo '<i class="fa fa-star"></i>';
                                            }
                                            for ($i = 5; $i > $rating; $i--) {
                                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            }

                                            ?>
                                        </p>
                                        <p><?php echo $row['comment'] ?></p>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <!-- <span class="sr-only">Previous</span> -->
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <!-- <span class="sr-only">Next</span> -->
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h4>Holiday Crown</h4>
                <p>Holiday Crown là ba và các bài hát đã phát sinh. Của trong vùng lân cận khinh cùng nhau trong nhánh có thể. Công ty được bảo đảm vội vàng tìm kiếm những chiếc áo choàng trong oh. Hầu hết tình yêu của tôi đã đi đến điều này như vậy. Phát hiện ra quan tâm thịnh vượng trong ngày vô vị đối đầu của chúng tôi. Những người tình lỡ cách một mong ước phù phiếm nay nhưng. Dùng nhút nhát dường như trong vòng hai mươi mong ước cũ ít hối tiếc qua đi. Tuyệt đối một người vội vàng bất kỳ hợp lý nào.</p>
            </div>

            <div class="col-sm-3">
                <h4>Đường dẫn</h4>
                <ul class="list-unstyled">
                    <li><a href="rooms-tariff.php">Phòng</a></li>
                    <li><a href="introduction.php">Sự kiện</a></li>
                    <li><a href="tour.php">Dịch vụ</a></li>
                    <li><a href="gallery.php">Giới thiệu</a></li>
                    <li><a href="contact.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-sm-4 subscribe">
                <h4>Đánh giá</h4>
                <form method="POST" action="rating.php">
                    <div class="form-group">
                        <label class="star_chk" for="star1" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="1" id="star1" style="display: none;">
                        <label class="star_chk" for="star2" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="2" id="star2" style="display: none;">
                        <label class="star_chk" for="star3" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="3" id="star3" style="display: none;">
                        <label class="star_chk" for="star4" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="4" id="star4" style="display: none;">
                        <label class="star_chk" for="star5" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="5" id="star5" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bình luận</label>
                        <textarea class="form-control" name="contentCmt" placeholder="Nội dung bình luận..." style="height: 100px;" required></textarea>
                    </div>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <input type="hidden" value="<?php echo $_SESSION['user']['userId']; ?>" name="userId">
                        <button type="submit" class="btn btn-default" name="comment">Đăng bình luận</button>
                    <?php } ?>

                </form>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

    <!--/.footer-bottom-->
</footer>


<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>








<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>






<script>
    const stars = document.querySelectorAll('.star_chk');
    stars.forEach(function(star, index) {
        star.onclick = function() {
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('active');
            }
            for (let i = index + 1; i < 5; i++) {
                stars[i].classList.remove('active');
            }
        }
    })
</script>



</body>

</html>