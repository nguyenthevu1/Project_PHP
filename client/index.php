<?php include 'header.php'; ?>

<!-- banner -->
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">Khách Sạn Tốt Nhất Dành Cho Bạn </h1>
                <p class="animated fadeInUp">Khách sạn sang trọng nhất Việt Nam với các phương pháp điều trị hoàng gia và dịch vụ khách hàng tuyệt vời.</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->
<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>
<!-- reservation-information -->
<!-- services -->
<div class="spacer services wowload fadeInUp">
    <div class="container">
        <div class="text-center" style="margin-bottom: 50px;">
            <h1>Trải nghiệm đặc biệt tại khách sạn Holiday Crown</h1>
        </div>
        <div class="row">
            <?php

            $page = 4;

            if (isset($_GET['page'])) {
                $page_current = $_GET['page'];
            } else {
                $page_current = 1;
            }

            $limit = ($page * $page_current);

            $selectProduct = "SELECT * from img_product, product,categories WHERE categories.catId =product.catId and 
													product.productId = img_product.productId and 
													categories.catName= 'Phòng ở'
													group by img_product.productId limit 0,$limit";
            $queryProduct = mysqli_query($conn, $selectProduct);

            $path = '../admin/';
            while ($row = mysqli_fetch_assoc($queryProduct)) {
            ?>
                <div class="col-sm-6" style="margin-bottom: 30px; padding:0 15px;">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel<?php echo $row['productId']; ?>" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="<?php echo $path . $row['img'] ?>" class="img-responsive" alt="slide" style="width:555px;height:313px;object-fit:cover"></div>
                            <?php
                            $id_pro = $row['productId'];
                            $select_img_product = "SELECT * FROM img_product where productId = '$id_pro' limit 1,15";
                            $img_product = mysqli_query($conn, $select_img_product);
                            while ($row_img = mysqli_fetch_assoc($img_product)) {
                            ?>
                                <div class="item  height-full"><img src="<?php echo $path . $row_img['img'] ?>" class="img-responsive" alt="slide" style="width:555px;height:313px;object-fit:cover"></div>
                            <?php } ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel<?php echo $row['productId']; ?>" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel<?php echo $row['productId']; ?>" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">
                        <h5 style=" font-size: 16px;color: black;margin-bottom: 10px;"><?php echo $row['level'] ?></h5>
                        <h3><?php echo $row['productName'] ?></h3>
                        <h4><?php echo number_format($row['price']) . 'VNĐ' ?></h4>
                        <a href="room-details.php?id=<?php echo $row['productId'] ?>" class="pull-right">
                            <button class="btn btn-warning book-now" style="height:38px;border-radius: 15px; background-color:rgb(253,126,20);margin-top:-75px">Đặt ngay</button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center">
            <?php
            $select_product = "SELECT * FROM product,categories where categories.catId = product.catId 
                                        and categories.catName = 'Phòng ở'";
            $count_product = mysqli_query($conn, $select_product);

            $count = mysqli_num_rows($count_product);
            $page_next = ceil($count / $page);
            if ($page_current < $page_next) {

            ?>
                <a href="index.php?page=<?php echo ($page_current + 1) ?>"><button class="btn btn-default">Xem thêm</button></a>
            <?php } else { ?>
                <button class="btn btn-default">Xem thêm</button>
            <?php } ?>
        </div>
    </div>
</div>


<!-- services -->


<?php include 'footer.php'; ?>