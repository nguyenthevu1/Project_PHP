<?php
include('./layout/header.php');
require('../db/config.php');

$error = [];
if (isset($_POST['add_hotel'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $file = $_FILES['files'];
    $catId = $_POST['catId'];
    $level = $_POST['level'];

    if($catId==10 || $catId==8) {
        $price = '0000';
        $level = '';
    }
    else{
        if (empty($price)) $error['price'] = "Vui lòng nhập trường này!";
    }

    if (empty($title)) $error['title'] = "Vui lòng nhập trường này!";
    if (empty($content)) $error['content'] = "Vui lòng nhập trường này!";

    if ($title != '' && $price != '' && $content != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

        $path = 'uploads/';

        $img = $_FILES['files']['name'];
        $tmp = $_FILES['files']['tmp_name'];
        $pathImg = [];
        foreach ($img as $key => $value) {
            $tmp = $_FILES['files']['tmp_name'][$key];
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));
            if (in_array($ext, $valid_extensions)) {
                $path = $path . strtolower($value);
                $pathImg[$key] = $path;

                move_uploaded_file($tmp, $path);
            }
        }
        $add = "INSERT into product(catId, productName, price, content,level)
                        values('$catId','$title','$price','$content','$level')";
        mysqli_query($conn, $add);
        $id_pro =  mysqli_insert_id($conn);
        foreach ($pathImg as $key => $value) {
            mysqli_query($conn, "INSERT into img_product(productId,img) values('$id_pro','$value')");
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
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="container">
            <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                <div class="mb-3">
                    <label for="cat">Danh mục</label>
                    <?php
                    $select_cats = "SELECT * from categories";
                    $cats = mysqli_query($conn, $select_cats);
                    ?>
                    <select name="catId" id="cat" class="form-select">
                        <option>
                            --Chọn danh mục--
                        </option>
                        <?php
                        while ($row = mysqli_fetch_assoc($cats)) {
                            echo '<option value="' . ($row['catId']) . '">' . ($row['catName']) . '</option>';
                        } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
                    <div class="form-text"><?php echo isset($error['title']) ? $error['title'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá tiền phòng</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá tiền">
                    <div class="form-text"><?php echo isset($error['price']) ? $error['price'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <textarea name="content" id="content" class="form-control" placeholder="Nhận nội dung" style="height: 146px;"></textarea>
                    <div class="form-text"><?php echo isset($error['content']) ? $error['content'] : ''; ?></div>
                </div>

                <div class="mb-3 ">
                    <div id="preview">
                    </div>
                    <input type="file" class="form-control" id="files" name="files[]" multiple>
                    <div class="form-text"><?php echo isset($error['file']) ? $error['file'] : ''; ?></div>
                </div>


                <div class="mb-3">
                    <select name="level" id="select_level" class="form-select">
                        <option>
                            --Chọn Mức phòng--
                        </option>
                        <option value="Tiêu chuẩn" selected>Tiêu chuẩn</option>
                        <option value="Phòng club">Phòng club</option>
                        <option value="Suite">Suite</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="add_hotel">Thêm</button>
            </form>
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

    const cat = document.getElementById('cat')
    const price = document.getElementById('price');
    const select_level = document.getElementById('select_level');
    
    
    cat.onchange = function() {
        if(cat.value == 10 || cat.value == 8){
            price.setAttribute('disabled',true);
            select_level.setAttribute('disabled',true);
        }
    }
</script>
<?php
include('./layout/footer.php');
?>