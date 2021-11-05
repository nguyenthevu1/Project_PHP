<?php
include('./layout/header.php');
require('../db/config.php');
session_start();
$error = [];

if (isset($_POST['update_admin'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $file = $_FILES['file'];
    $id = $_POST['id'];

    if (empty($email)) $error['email'] = "Vui lòng nhập trường này!";
    if (empty($fullName)) $error['fullName'] = "Vui lòng nhập trường này!";
    if (empty($password)) $error['password'] = "Vui lòng nhập trường này!";
    if (!empty($email) || !empty($fullName) || !empty($password)) {

        $tmp = $_FILES['file']['tmp_name'];

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
        $path = 'uploads/';
        $img = $_FILES['file']['name'] ? $_FILES['file']['name'] : '';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        if (!empty($tmp)) {
            if (in_array($ext, $valid_extensions)) {
                $path = $path . strtolower($img);
                if (move_uploaded_file($tmp, $path)) {
                    $update = "UPDATE users set email = '$email',fullName = '$fullName',avatarUser='$path' where userId = '$id'";
                    mysqli_query($conn, $update);
                }
            } else {
                $error['file'] = 'file không đúng định dạng';
            }

        } else {
            $update = "UPDATE users set email = '$email',fullName = '$fullName' where userId = '$id'";
            mysqli_query($conn, $update);
        }
        $selectImg = "SELECT * FROM users where userId = '$id'";
        $update_img = mysqli_query($conn, $selectImg);
        $admin = mysqli_fetch_assoc($update_img);

        $_SESSION['admin'] = $admin;
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
                $select_update = "SELECT * from users where userId = '$id'";
                $update = mysqli_query($conn, $select_update);
                while ($row = mysqli_fetch_assoc($update)) {

            ?>
                    <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                        <div class="mb-3">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="<?php echo $row['email']; ?>">
                            <div class="form-text"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Họ và Tên</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nhập họ và tên" value="<?php echo $row['fullName']; ?>">
                            <div class="form-text"><?php echo isset($error['fullName']) ? $error['fullName'] : ''; ?></div>
                        </div>
                        <div class="mb-3 ">
                            <div id="preview">
                                <img src="<?php echo $row['avatarUser']; ?>" alt="">
                            </div>
                            <input type="file" class="form-control" id="file" name="file">
                            <div class="form-text"><?php echo isset($error['file']) ? $error['file'] : ''; ?></div>
                        </div>
                        <input type="hidden" class="form-control" id="file" name="id" value="<?php echo $row['userId']; ?>">
                        <?Php
                        if ($_SESSION['admin']['userId'] == $id) {
                            echo '<button type="submit" class="btn btn-primary" name="update_admin">Cập nhật</button>';
                        } else {
                            echo '<button type="submit" class="btn btn-primary" name="update_admin" disabled>Cập nhật</button>';
                        }
                        ?>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<script>
    var upload = document.getElementById('file');
    upload.addEventListener('change', function(e) {
        var fileSelected = e.target.files[0];
        var src = URL.createObjectURL(fileSelected);
        fileSelected.preview = src;
        var newImage = document.createElement('img');
        newImage.src = src;
        document.getElementById('preview').innerHTML = newImage.outerHTML;
        console.log(fileSelected)
    })
</script>
<?php
include('./layout/footer.php');
?>