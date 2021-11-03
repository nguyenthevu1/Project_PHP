<?php

include 'header.php';

isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
$rpp = 2;

//check for page 1 
if ($page > 1) {
    $start = ($page * $rpp) - $rpp;
} else {
    $start = 0;
}

//truy vấn 
$sql = "SELECT product.productId FROM product,img_product WHERE product.productId = img_product.productId";
$resultSet = $conn->query($sql);

//lấy ra tổng số bản ghi
$numRows = mysqli_num_rows($resultSet);

//Lấy ra tổng số bản ghi của 1 trang
$totalPages = $numRows / $rpp;
$query = "SELECT * FROM product,img_product WHERE product.productId = img_product.productId LIMIT $start,$rpp";
$resultSet = $conn->query($query);

//lặp lấy ra các bản ghi
while ($row = $resultSet->fetch_assoc()) { ?>
    <div class="col-sm-6 col-md-6 wowload fadeInUp">
        <div class="rooms"><img src="<?php echo $path . $row['img'] ?>" class="img-responsive">
            <div class="info">
                <h3><?php echo $row['productName'] ?></h3>
                <p><?php echo $row['content'] ?> </p><a href="room-details.php?id=<?php echo $row['productId'] ?>" class="btn btn-default">Check Details</a>
            </div>
        </div>
    </div>
<?php } ?>
<div class="text-center">
    <ul class="pagination">
        <li class="disabled"><a href="#">«</a></li>
        <?php for ($x = 1; $x < $totalPages; $x++) { ?>


            <li class="active"><a href="pagination.php?page=1"><?php echo $x ?> <span class="sr-only">(current)</span></a></li>


        <?php } ?>
    </ul>
</div>



