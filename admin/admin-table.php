<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href=""><button class="btn btn-primary" style="margin-left: 20px;">Thêm quản trị viên</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ảnh</th>
                <th scope="col">email</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Hành Động</th>
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
                    <td><img src="<?php echo $row['avatarAdmin']; ?>" alt="avatar" style="width: 100px;"></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td>
                        <a href=""><button class="btn btn-primary">Đổi mật khẩu</button></a>
                        <a href=""><button class="btn btn-success">cập nhật</button></a>
                        <a href=""><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>