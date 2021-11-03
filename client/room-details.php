<?php include 'header.php'; ?>

<div class="container">

  <h1 class="title">Luxirious Suites</h1>

  <?php
  $id = $_GET['id'];
  $sql_img = "SELECT img FROM product,img_product WHERE product.productId = img_product.productId and  product.productId = '$id' limit 1";

  $query_img = mysqli_query($conn, $sql_img);
  $path = '../admin/';
  $img_active = mysqli_fetch_assoc($query_img);
  ?>
  <!-- RoomDetails -->
  <div id="RoomDetails" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <?php
      $sql_img_hf = "SELECT img FROM product,img_product WHERE product.productId = img_product.productId and  product.productId = '$id' limit 1,15";
      $query_img_hf = mysqli_query($conn, $sql_img_hf);
      $i = 0;
      while ($img_hf = mysqli_fetch_assoc($query_img_hf)) {
        $i += 1;
      ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
      <?php } ?>
    </ol>
    <div class="carousel-inner">
      <div class="item active"><img src="<?php echo $path . $img_active['img']; ?>" class="img-responsive" alt="slide" style="width: 100%;"></div>
      <?php
      $sql_img_hf = "SELECT img FROM product,img_product WHERE product.productId = img_product.productId and  product.productId = '$id' limit 1,15";
      $query_img_hf = mysqli_query($conn, $sql_img_hf);
      while ($img_hf = mysqli_fetch_assoc($query_img_hf)) {
      ?>
        <div class="item  height-full"><img src="<?php echo $path . $img_hf['img']; ?>" class="img-responsive" alt="slide" style="width: 100%;"></div>
        <!-- <div class="item  height-full"><img src="images/photos/10.jpg" class="img-responsive" alt="slide" style="width: 100%;"></div> -->
      <?php } ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
  </div>
  <!-- RoomCarousel-->

  <div class="room-features spacer">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <?php

        $sql = "SELECT * FROM product WHERE product.productId = $id ";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        ?>
        <p><?php echo $row['content'] ?></p>
      </div>
      <div class="col-sm-12 col-md-3">
        <h4 style="margin-bottom: 10px;"><?php echo $row['level'] ?></h4>
        <h3><?php echo $row['productName'] ?></h3>
        <h2>Giá Phòng:</h2>
        <h4><?php echo number_format($row['price']) . 'VNĐ người/đêm' ?></h4>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="booking">
          <form method="POST" action="./booking_room.php">
            <h4>Đặt Phòng</h4>
            <div class="form-group" style="width: 260px;">
              <label for="checkin">Ngày đến</label>
              <input type="date" class="form-control" id="checkin" name="checkin" required>
            </div>
            <div class="form-group" style="width: 260px;">
              <label for="checkout">Ngày trả</label>
              <input type="date" class="form-control" id="checkout" name="checkout" required>
            </div>
            <?php if(isset($_SESSION['user'])) { ?>
            <input type="hidden" name="price" id="" value="<?php echo $row['price']?>">
            <input type="hidden" name="userId" id="" value="<?php echo $_SESSION['user']['userId'];?>">
            <input type="hidden" name="productId" id="" value="<?php echo $row['productId']?>">
            <?php } ?>
            <div class="form-group" style="width: 260px;">
              <label>Số Người</label>
              <select class="form-control" name="people" id="people">
                <option value="1">1 Người</option>
                <option value="2">2 Người</option>
                <option value="3">3 Người</option>
                <option value="4">4 Người</option>
                <option value="5">5 Người</option>
              </select>
            </div>
            <div class="form-group" style="width: 260px;">
              <label> Chọn tầng</label>
              <select class="form-control" name="floor" id="floor">
                <option value="1">Tầng 1</option>
                <option value="2">Tầng 2</option>
                <option value="3">Tầng 3</option>
                <option value="4">Tầng 4</option>
                <option value="5">Tầng 5</option>
                <option value="6">Tầng 6</option>
                <option value="7">Tầng 7</option>
                <option value="8">Tầng 8</option>
                <option value="9">Tầng 9</option>
                <option value="10">Tầng 10</option>
              </select>
            </div>
            <button type="submit" class="btn btn-default" name="booking">Đặt ngay</button>
          </form>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 40px;">
      <h3>Thư viện</h3>
      <?php
      $sql_img_hf = "SELECT img FROM product,img_product WHERE product.productId = img_product.productId and  product.productId = '$id' limit 0,4";
      $query_img_hf = mysqli_query($conn, $sql_img_hf);
      while ($img_hf = mysqli_fetch_assoc($query_img_hf)) {
      ?>
        <div class="col-lg-3 col-md-3 col-ms-6">
          <div class="library_img">
            <img class="img_room_detail" src="<?php echo $path . $img_hf['img']; ?>" alt="">
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>