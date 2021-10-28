<?php
require('../db/config.php');
include_once('./layout/header.php');
?>

<div class="content-body" style="color: black;">
    <a href="./addCategories.php"><button class="btn btn-primary" style="margin-left: 20px;">Thêm danh mục</button></a>
    <table class="table mt-4" style="color: black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selectCats = "SELECT * from categories";
            $categories = mysqli_query($conn, $selectCats);
            $i = 0;
            while ($row = mysqli_fetch_assoc($categories)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['catName']; ?></td>
                    <td>
                        <a href="./capnhat_categories.php?id=<?php echo $row['catId']?>"><button class="btn btn-success">cập nhật</button></a>
                        <a href="./xoa_category.php?id=<?php echo $row['catId']?>"><button class="btn btn-danger">xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once('./layout/footer.php');
?>