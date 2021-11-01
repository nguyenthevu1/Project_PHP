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
          $query = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($query);
        ?>
       <p><?php echo $row['content'] ?></p>
      </div>
   
      <div class="col-sm-3 col-md-2">
        <div class="size-price">Size<span>44 sq</span></div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="size-price">Price<span><?php echo $row['price']?></span></div>
      </div>
    </div>
  </div>



</div>
<?php include 'footer.php'; ?>