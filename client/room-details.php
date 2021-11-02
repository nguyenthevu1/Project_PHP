<?php include 'header.php'; ?>

<div class="container">

  <h1 class="title">Luxirious Suites</h1>



  <!-- RoomDetails -->
  <div id="RoomDetails" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide" style="width: 100%;"></div>
      <div class="item  height-full"><img src="images/photos/9.jpg" class="img-responsive" alt="slide" style="width: 100%;"></div>
      <div class="item  height-full"><img src="images/photos/10.jpg" class="img-responsive" alt="slide" style="width: 100%;"></div>
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
        $id = $_GET['id'];
        $sql = "SELECT * FROM product,img_product WHERE product.productId = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        ?>
        <p><?php echo $row['content'] ?></p>
      </div>

      <div class="col-sm-3 col-md-5">
        <div class="booking">
          <form>
            <h4>Đặt Phòng</h4>
            <div class="form-group">
              <label for="checkin">Ngày đến</label>
              <input type="date" class="form-control" placeholder="Email" id="checkin" name="checkin">
            </div>
            <div class="form-group">
              <label for="checkout">Ngày trả</label>
              <input type="date" class="form-control" placeholder="Password" id="checkout" name="checkout">
            </div>
            <div class="form-group">
            <label>Số Người</label>
              <select class="form-control" name="people" id="people">
                <option value="1">1 Người</option>
                <option value="2">2 Người</option>
                <option value="3">3 Người</option>
                <option value="4">4 Người</option>
                <option value="5">5 Người</option>
              </select>
            </div>
            <div class="form-group">
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
            <button type="submit" class="btn btn-default">Đặt ngay</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>