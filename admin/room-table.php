<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href="./addRoom.php"><button class="btn btn-primary" style="margin-left: 20px;">Thêm khách sạn</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Giá phòng</th>
                <th scope="col">Cấp độ</th>
                <th scope="col">Ảnh</th></th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from admin";
            $admin = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($admin)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="<?php echo $row['avatarAdmin']; ?>" alt="avatar" style="width: 60px;"></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td>
                        <a href="./update_hotel.php?id='.($row['adminId']).'"><button class="btn btn-success">cập nhật</button></a>
                        <a href="./delete_hotel.php?id='.($row['adminId']).'"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>