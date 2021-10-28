<?php
include('./layout/header.php');
require('../db/config.php');

$error = [];
$error['category'] = '';
if (isset($_POST['add_cat'])) {
    $catName = $_POST['category'];

    if (empty($catName)) $error['category'] = "Vui lòng nhập trường này!";

    $select_cat = "SELECT * from categories where catName = '$catName'";
    $cat_q = mysqli_query($conn, $select_cat);

    if ($catName != '') {

        if (mysqli_num_rows($cat_q) < 1) {

            $addCat = "INSERT into categories(catName) values('$catName')";
            mysqli_query($conn, $addCat);
            header('location: index.php');
        } else {
            $error['email'] = 'Danh mục đã tồn tại';
        }
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
            <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                <div class="mb-3">
                    <label for="category" class="form-label">Tên danh mục</label>
                    <input type="category" class="form-control" id="category" name="category" placeholder="Nhập danh mục">
                    <div class="form-text"><?php echo $error['category'] ? $error['category'] : ''; ?></div>
                </div>
                <button type="submit" class="btn btn-primary" name="add_cat">Thêm</button>
            </form>
        </div>
    </div>
</div>
<?php
include('./layout/footer.php');
?>