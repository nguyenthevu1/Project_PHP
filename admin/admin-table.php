<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href="./addAdmin.php"><button class="btn btn-primary" style="margin-left: 20px;">Thêm quản trị viên</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ảnh</th>
                <th scope="col">email</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Quyền</th>
                <th scope="col">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectAd = "SELECT * from users where isAdmin = 1";
            $admin = mysqli_query($conn, $selectAd);
            $i = 0;
            while ($row = mysqli_fetch_assoc($admin)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="<?php echo $row['avatarUser']; ?>" alt="avatar" style="width: 60px;"></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td>
                        <?php
                        if ($row['role'] == 1) $role = 'Admin';
                        if ($row['role'] == 0) $role = 'Mod';

                        if ($_SESSION['admin']['role'] == 1) {
                            echo '<a href="update_role.php?id=' . ($row['userId']) . ' class="update_role">
                                        <span class="btn btn-info">
                                            ' . ($role) . '
                                        </span>
                                    </a>';
                        } else {
                            echo '
                            <span class="btn btn-info">
                                ' . ($role) . '
                            </span>';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="./changePassword.php?id=<?php echo $row['userId'] ?>"><button class="btn btn-primary">Đổi mật khẩu</button></a>
                        <?Php
                        if ($_SESSION['admin']['role'] == 1) {
                            echo '
                              <a href="./delete_admin.php?id=' . ($row['userId']) . '"><button class="btn btn-danger">xóa</button></a>';
                        } else {
                            echo '
                              <button disabled class="btn btn-danger">xóa</button>';
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>