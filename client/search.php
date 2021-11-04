
<?php
include './header.php';
if (isset($_POST['searchSubmit'])) {

    $search = mysqli_real_escape_string($conn, $_POST['searchInput']);

    $sql = "SELECT * FROM product,img_product WHERE product.productId = img_product.productId and product.productName like '%$search%' group by img_product.productId";
    $query = $conn->query($sql);
    $num = mysqli_num_rows($query);
    $path = '../admin/';
    echo '<div class = "danger">';
    echo 'Có '.$num .' Kết quả được tìm thấy' ;
    echo '</div>';
    if ($num > 0) { ?>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <?php
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-sm-6 col-md-6 wowload fadeInUp">
                        <div class="rooms"><img src="<?php echo $path . $row['img'] ?>" class="img-responsive">
                            <div class="info">
                                <h3><?php echo $row['productName'] ?></h3>
                                <p class="content"><?php echo $row['content'] ?> </p><a href="room-details.php?id=<?php echo $row['productId'] ?>" class="btn btn-default">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

<?php } 
}
?>

<?php include './footer.php';?>