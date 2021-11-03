<?php include 'header.php'; ?>

<div class="container">

  <h2>Phòng khách sạn</h2>


  <!-- form -->

  <div class="row">
    <?php
    $sql = "SELECT * FROM img_product , product ,categories WHERE img_product.productId = product.productId and product.catId = categories.catId and categories.catId  ='9' group by img_product.productId";
    $query = mysqli_query($conn, $sql);
    $path = '../admin/';
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms"><img src="<?php echo $path . $row['img'] ?>" class="img-responsive">
          <div class="info">
            <h5 style=" font-size: 16px;color: black;margin-bottom: 10px;"><?php echo $row['level'] ?></h5>
            <h3><?php echo $row['productName'] ?></h3>
            <h4><?php echo number_format($row['price']).'VNĐ' ?></h4>
            <p><?php echo $row['content'] ?> </p><a href="room-details.php?id=<?php echo $row['productId'] ?>" class="btn btn-default">Đặt Ngay</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="text-center">
    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>


</div>
<?php include 'footer.php'; ?>