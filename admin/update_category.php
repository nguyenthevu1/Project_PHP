<?php
include('./layout/header.php');
require('../db/config.php');

$error = [];
if (isset($_POST['update_cat'])) {
    $catName = $_POST['category'];
    $id = $_POST['id'];

    if (empty($catName)) $error['category'] = "Vui lòng nhập trường này!";

    if ($catName != '') {
        $updateCat = "UPDATE categories set catName = '$catName' where catId = '$id'";
        mysqli_query($conn, $updateCat);
        header('location: index.php');
    }
}


?>
<style>
    .form-text {
        color: red;
    }

    #preview img {
        width: 150px;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="container">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $select_update_cat = "SELECT * from categories where catId = '$id'";
                $update_cat = mysqli_query($conn, $select_update_cat);
                while ($row = mysqli_fetch_assoc($update_cat)) {
            ?>
                <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                    <div class="mb-3">
                        <label for="category" class="form-label">Tên danh mục</label>
                        <input type="category" class="form-control" id="category" name="category" placeholder="Nhập danh mục" value="<?php echo $row['catName']?>">
                        <div class="form-text"><?php echo isset($error['category']) ? $error['category'] : ''; ?></div>
                    </div>
                    <input type="hidden" value="<?php echo $row['catId']?>" name="id">
                    <button type="submit" class="btn btn-primary" name="update_cat">Cập nhật</button>
                </form>
            <?php }
            } ?>
        </div>
    </div>
</div>
<?php
include('./layout/footer.php');
?>