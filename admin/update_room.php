<?php
include('./layout/header.php');
require('../db/config.php');


$error = [];
if (isset($_POST['update_room'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $file = $_FILES['files'];
    $catId = $_POST['catId'];
    $level = $_POST['level'];

    $id = $_POST['id'];
    // echo $level;
    // print_r($_POST['id']);
    // die();
    if (empty($title)) $error['title'] = "Vui lòng nhập trường này!";
    if (empty($price)) $error['price'] = "Vui lòng nhập trường này!";
    if (empty($content)) $error['content'] = "Vui lòng nhập trường này!";

    if ($title != '' && $price != '' && $content != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');

        $path = 'uploads/';

        $img = $_FILES['files']['name'];
        $tmp = $_FILES['files']['tmp_name'];
        $pathImg = [];
        foreach ($img as $key => $value) {
            $tmp = $_FILES['files']['tmp_name'][$key];
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));

            $final_image = rand(1000, 1000000) . $value;

            if (in_array($ext, $valid_extensions)) {
                $path = $path . strtolower($final_image);
                $pathImg[$key] = $path;
                move_uploaded_file($tmp, $path);
            }
        }

        // print_r($pathImg);
        // die();

        $update = "UPDATE product set catId = '$catId', productName = '$title', price = '$price',
                content = '$content',level = '$level' where productId = '$id'";
        mysqli_query($conn, $update);

        // $id_pro =  mysqli_insert_id($conn);
        
        foreach ($pathImg as $key => $value) {
            mysqli_query($conn, "INSERT into img_product(productId,img) values('$id','$value')");
        }
    }
}


?>
<style>
    .form-text {
        color: red;
    }

    #preview {
        display: flex;
        flex-wrap: wrap;
    }

    #preview img {
        padding: 10px;
        width: 150px;
    }

    .delete_img {
        position: relative;
        top: 0px;
        right: -150px;
        /* left: 0px; */
        color: red;
        cursor: pointer;

    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="container">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $selectAd = "SELECT * from img_product, categories, product WHERE categories.catId = product.catId and product.productId = img_product.productId and product.productId = '$id' GROUP by img_product.productId";
                $product = mysqli_query($conn, $selectAd);
                while ($row = mysqli_fetch_assoc($product)) {
                    $catId = $row['catId'];
            ?>
                    <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                        <input type="hidden" value="<?php echo $row['productId']; ?>" name="id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề" value="<?php echo $row['productName']; ?>">
                            <div class="form-text"><?php echo isset($error['title']) ? $error['title'] : ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Giá tiền phòng</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá tiền" value="<?php echo $row['price']; ?>">
                            <div class="form-text"><?php echo isset($error['price']) ? $error['price'] : ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <textarea name="content" id="content" class="form-control" placeholder="Nhận nội dung" style="height: 146px;"><?php echo $row['productName']; ?></textarea>
                            <div class="form-text"><?php echo isset($error['content']) ? $error['content'] : ''; ?></div>
                        </div>

                        <div class="mb-3 ">
                            <div id="preview">
                                <?php
                                $selectImg = "SELECT * from img_product where productId = '$id'";
                                $img = mysqli_query($conn, $selectImg);
                                while ($row_img = mysqli_fetch_assoc($img)) {
                                    echo '
                                        <a href="delete_rom_img.php?id=' . ($row_img['imgId']) . '"><p class="delete_img">&otimes;</p></a>
                                        <img src="' . ($row_img['img']) . '" alt="">';
                                }
                                ?>
                            </div>
                            <input type="file" class="form-control" id="files" name="files[]" multiple>
                            <div class="form-text"><?php echo isset($error['file']) ? $error['file'] : ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <?php
                            $select_cats = "SELECT * from categories";
                            $cats = mysqli_query($conn, $select_cats);
                            ?>
                            <select name="catId" id="">
                                <option>
                                    --Chọn danh mục--
                                </option>
                                <?php

                                while ($row = mysqli_fetch_assoc($cats)) {
                                    if ($catId == $row['catId']) {
                                        echo '<option value="' . ($row['catId']) . '" selected>' . ($row['catName']) . '</option>';
                                    } else {
                                        echo '<option value="' . ($row['catId']) . '">' . ($row['catName']) . '</option>';
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="level" id="">
                                <option>
                                    --Chọn Mức phòng--
                                </option>
                                <option value="1" selected>Tiêu chuẩn</option>
                                <option value="2">Phòng club</option>
                                <option value="3">Suite</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_room">cập nhật</button>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<script>
    var upload = document.getElementById('files');
    upload.addEventListener('change', function(e) {
        var files = e.target.files;
        console.log(files[0]);
        var preview = document.getElementById('preview')
        Array.from(files).forEach(function(file) {
            var src = URL.createObjectURL(file);
            file.preview = src;
            var newImage = document.createElement('img');
            newImage.src = src;
            preview.append(newImage);
        })
    })
</script>
<?php
include('./layout/footer.php');
?>