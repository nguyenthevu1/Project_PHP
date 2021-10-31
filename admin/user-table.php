<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href="./addUser.php"><button class="btn btn-primary" style="margin-left: 20px;">Thêm người dùng</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ảnh</th>
                <th scope="col">email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Thời gian tạo</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from users";
            $users = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($users)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="<?php echo $row['avatarUser']; ?>" alt="avatar" style="width: 60px;"></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['timeRegister']; ?></td>
                    <td>
                        <a href="./update_user.php?id=<?php echo $row['userId'];?>"><button class="btn btn-success">cập nhật</button></a>
                        <a href="./delete_user.php?id=<?php echo $row['userId'];?>"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>