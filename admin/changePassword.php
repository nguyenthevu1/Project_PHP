<?php
include('./layout/header.php');
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
            <form method="POST" action="./process-change.php" enctype="multipart/form-data" style="color:black;">
                <div class="mb-3">
                    <label for="currentPass" class="form-label">Mật khẩu hiện tại</label>
                    <input type="password" class="form-control" id="currentPass" name="currentPass" placeholder="Nhập mật khẩu hiện tại" required>
                    <div class="form-text"><?php echo isset($error['currentPass']) ? $error['currentPass'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="newPass" class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="newPass" name="newPass" placeholder="Nhập mật khẩu mới" required>
                    <div class="form-text"><?php echo isset($error['newPass']) ? $error['newPass'] : ''; ?></div>
                </div>
                <div class="mb-3">
                    <label for="confirmPass" class="form-label">xác nhận lại mật khẩu</label>
                    <input type="password" class="form-control" id="confirmPass" name="confirmPass" placeholder="Xác nhận mật khẩu" required>
                    <div class="form-text"><?php echo isset($error['confirmPass']) ? $error['confirmPass'] : ''; ?></div>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    echo '<input type="hidden" value = ' . ($id) . ' name="id">';
                    if($id == $_SESSION['admin']['userId']) {
                        echo '<button type="submit" class="btn btn-primary" name="update_pass">cập nhật</button>';
                    }
                    else {
                        echo '<button type="button" class="btn btn-primary" name="update_pass" disabled>cập nhật</button>';
                    }
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