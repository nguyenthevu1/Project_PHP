<?php
include('./layout/header.php');
require('../db/config.php');

$error = [];
$error['email'] = '';
$error['fullName'] = '';
$error['password'] = '';
$error['file'] = '';
if (isset($_POST['update_admin'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $file = $_FILES['file'];
    $id = $_POST['id'];

    if (empty($email)) $error['email'] = "Vui lòng nhập trường này!";
    if (empty($fullName)) $error['fullName'] = "Vui lòng nhập trường này!";
    if (empty($password)) $error['password'] = "Vui lòng nhập trường này!";
    
    $tmp = $_FILES['file']['tmp_name'];

    if($tmp != '') {

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
        $path = 'uploads/';
    
        $img = $_FILES['file']['name'] ? $_FILES['file']['name'] : '' ;
    
    
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    
        $final_image = rand(1000, 1000000) . $img;
        if (in_array($ext, $valid_extensions)) {
            $path = $path . strtolower($final_image);
            if (move_uploaded_file($tmp, $path)) {
                $add = "UPDATE admin set email = '$email',fullName = '$fullName',avatarAdmin='$path' where adminId = '$id'";
                
            }
        } else {
            $error['file'] = 'file không đúng định dạng';
        }
    }
    else{
        $add = "UPDATE admin set email = '$email',fullName = '$fullName' where adminId = '$id'";
    }
    mysqli_query($conn, $add);
    header('location: admin-table.php');
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
                $select_update = "SELECT * from admin where adminId = '$id'";
                $update = mysqli_query($conn, $select_update);
                while ($row = mysqli_fetch_assoc($update)) {

            ?>
                    <form method="POST" action="" enctype="multipart/form-data" style="color:black;">
                        <div class="mb-3">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="<?php echo $row['email']; ?>">
                            <div class="form-text"><?php echo $error['email'] ? $error['email'] : ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Họ và Tên</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nhập họ và tên" value="<?php echo $row['fullName']; ?>">
                            <div class="form-text"><?php echo $error['fullName'] ? $error['fullName'] : ''; ?></div>
                        </div>
                        <div class="mb-3 ">
                            <div id="preview">
                                <img src="<?php echo $row['avatarAdmin']; ?>" alt="">
                            </div>
                            <input type="file" class="form-control" id="file" name="file">
                            <div class="form-text"><?php echo $error['file'] ? $error['file'] : ''; ?></div>
                        </div>
                        <input type="hidden" class="form-control" id="file" name="id" value="<?php echo $row['adminId']; ?>">
                        <?Php
                        if ($_SESSION['user']['role'] == 1) {
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