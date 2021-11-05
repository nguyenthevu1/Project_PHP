
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