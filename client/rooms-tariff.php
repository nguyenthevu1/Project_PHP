<?php
include 'header.php';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$num_per_page = 4;
$start = ($page - 1) * $num_per_page;


?>

<div class="container">

  <h2>Phòng khách sạn</h2>


  <!-- form -->

  <div class="row">
    <?php
    $sql = "SELECT * FROM img_product , product ,categories WHERE img_product.productId = product.productId and product.catId = categories.catId and categories.catId  ='9' group by img_product.productId LIMIT $start,$num_per_page";
    $query = mysqli_query($conn, $sql);
    $path = '../admin/';
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms"><img src="<?php echo $path . $row['img'] ?>" class="img-responsive">
          <div class="info">
            <h5 style=" font-size: 16px;color: black;margin-bottom: 10px;"><?php echo $row['level'] ?></h5>
            <h3><?php echo $row['productName'] ?></h3>
            <h4><?php echo number_format($row['price']) . 'VNĐ' ?></h4>
            <p><?php echo $row['content'] ?> </p><a href="room-details.php?id=<?php echo $row['productId'] ?>" class="btn btn-default">Đặt Ngay</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <?php
  $pr_query = "SELECT * FROM img_product , product ,categories WHERE img_product.productId = product.productId and product.catId = categories.catId and categories.catId  ='9' group by img_product.productId";
  $pr_result = $conn->query($pr_query);
  $total_record = mysqli_num_rows($pr_result);

  $total_page = ceil($total_record / $num_per_page);
  echo "<div class='text-center'>
    <ul class='pagination'>";
  if ($page > 1) {
    echo "<li><a href='rooms-tariff.php?page=" . ($page - 1) . "'>«</a></li>";
  }
  for ($i = 1; $i <= $total_page; $i++) {
    echo "<li class='active'><a href='rooms-tariff.php?page=$i'> $i <span class='sr-only'>(current)</span></a></li>";
  }
  if ($page < $total_page) {
    echo "<li><a href='rooms-tariff.php?page=" . ($page + 1) . "'>»</a></li>";
  }
  echo "</ul>";
  echo "</div>";
  ?>
  <!-- <div class="text-center">
    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div> -->


</div>
<?php include 'footer.php'; ?>