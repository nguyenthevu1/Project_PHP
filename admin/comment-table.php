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
                <th scope="col">Số điện thoại</th>
                <th scope="col">Số sao</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from users,comment where users.userId = comment.userId";
            $product = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($product)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['rating']; ?></td>
                    <td><?php echo $row['comment']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                        <a href="./delete_comment.php?id=<?php echo $row['cmtId']; ?>"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>