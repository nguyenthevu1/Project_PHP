<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Tên dịch vụ</th>
                <th scope="col">Cấp độ</th>
                <th scope="col">Tổng Tiền</th>
                <th scope="col">Thời gian đặt</th>
                <th scope="col">Thời gian trả</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from producttaken as proT,product as pro,users where pro.productId = proT.productId and users.userId = proT.userId";
            $product = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($product)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['productName']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                    <td><?php echo number_format($row['price']).'VNĐ'; ?></td>
                    <td><?php echo $row['dateStart']; ?></td>
                    <td><?php echo $row['dateEnd']; ?></td>
                    <td>
                       
                        <a href="./delete_order.php?id=<?php echo $row['proTakenId']; ?>"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>