<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href="./addProduct.php"><button class="btn btn-primary" style="margin-left: 20px;">Thêm sản phẩm</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Ảnh</th></th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from img_product, categories, product WHERE categories.catId = product.catId 
                            and product.productId = img_product.productId 
                            and catName='Dịch vụ' GROUP by img_product.productId";
            $product = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($product)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['catName']; ?></td>
                    <td><?php echo $row['productName']; ?></td>
                    <td><img src="<?php echo $row['img']?>" alt="img" style="width: 150px;"></td>
                    	

                    <td>
                        <a href="./update_product.php?id=<?php echo $row['productId']; ?>"><button class="btn btn-success">cập nhật</button></a>
                        <a href="./delete_product.php?id=<?php echo $row['productId']; ?>"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>