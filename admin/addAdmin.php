<?php
include('./layout/header.php');
require('../db/config.php');

$error = [];
if (isset($_POST['add_admin'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $file = $_FILES['file'];

    if (empty($email)) $error['email'] = "Vui lòng nhập trường này!";
    if (empty($fullName)) $error['fullName'] = "Vui lòng nhập trường này!";
    if (empty($password)) $error['password'] = "Vui lòng nhập trường này!";
    if (empty($phone)) $error['phone'] = "Vui lòng nhập trường này!";



    $select_email = "SELECT * from users where email = '$email'";
    $email_q = mysqli_query($conn, $select_email);

    if ($email != '' && $fullName != '' && $password != '') {

        if (mysqli_num_rows($email_q) < 1) {
            $img = $_FILES['file']['name'];
            $hasPwd = password_hash($password, PASSWORD_DEFAULT);
            if ($img != '') {

                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt');
                $path = '../admin/uploads/';

                $tmp = $_FILES['file']['tmp_name'];


                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                if (in_array($ext, $valid_extensions)) {


                    $path = $path . strtolower($img);
                    if (move_uploaded_file($tmp, $path)) {
                        $addAdmin = "INSERT into users(email,phone,fullName,password,avatarUser,isAdmin,role,status)
                                values('$email','$phone','$fullName','$hasPwd`','$path',1,0,1)";
                    }
                } else {
                    $error['file'] = 'file lỗi định dạng';
                }
            } else {
                $path = 'uploads/incognito.png';
                $addAdmin = "INSERT into users(email,phone,fullName,password,avatarUser,isAdmin,role,status)
                                values('$email','$phone','$fullName','$hasPwd','$path',1,0,1)";
            }
            mysqli_query($conn, $addAdmin);

            header('location: admin-table.php');
        } else {
            $error['email'] = 'Email đã tồn tại';
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
                    <label for="email" class="form-label">Địa chỉ email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                    <div class="form-text"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nhập họ và tên">
                    <div class="form-text"><?php echo isset($error['fullName']) ? $error['fullName'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thọai">
                    <div class="form-text"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                    <div class="form-text"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>
                </div>
                <div class="mb-3 ">
                    <div id="preview">
                    </div>
                    <input type="file" class="form-control" id="file" name="file">
                    <div class="form-text"><?php echo isset($error['file']) ? $error['file'] : ''; ?></div>
                </div>
                <?Php
                if ($_SESSION['user']['role'] == 1) {
                    echo '<button type="submit" class="btn btn-primary" name="add_admin">Thêm</button>';
                } else {
                    echo '<button type="submit" class="btn btn-primary" name="add_admin" disabled>Thêm</button>';
                }
                ?>
            </form>
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