<?php 
    include 'header.php';
    if(isset($_POST['searchSubmit'])){
        $search = mysqli_real_escape_string($conn,$_POST['searchInput']);
        $sql = "SELECT * FROM product,img_product WHERE product.productId = img_product.productId and product.productName like '%$search%' group by img_product.productId";
        $query = $conn->query($sql);
        $num = mysqli_num_rows($query);
        $path = '../admin/';
        if($num > 0){
            while($row = $query->fetch_assoc()){ ?>
                <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="<?php echo $path.$row['img']?>" class="img-responsive"><div class="info"><h3><?php echo $row['productName']?></h3><p><?php echo $row['content']?> </p><a href="room-details.php?id=<?php echo $row['productId']?>" class="btn btn-default">Check Details</a></div></div></div>

            <?php } 
        }
        else{
            echo 'Không có kết quả nào với từ khóa trên';
        }
    }
   
?>
