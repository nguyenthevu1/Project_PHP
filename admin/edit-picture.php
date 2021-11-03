<style>
     .form-text {
        color: red;
    }

    #preview img {
        width: 150px;
    }
</style>
<div class="editProfile">
    <div class="edit">
        <form method="POST" id="form1" action='./change_img.php' enctype="multipart/form-data">
            <div class="mb-3">
                <div id="preview">
                    <img src="<?php echo $_SESSION['user']['avatarUser']; ?>" alt="">
                </div class="mb-3">
                <input type="file" class="form-control" id="file" name="file">
                <input type="hidden" name="id" value="<?php echo $_SESSION['user']['userId']; ?>">
                <div class="form-text"><?php echo isset($error['file']) ? $error['file'] : ''; ?></div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit_picture">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
</div>
<script>
    var upload = document.getElementById('file');
    var cancel_update = document.querySelector('.cancel_update');
    var form1 = document.getElementById('form1');
    upload.addEventListener('change', function(e) {
        var fileSelected = e.target.files[0];
        var src = URL.createObjectURL(fileSelected);
        fileSelected.preview = src;
        var newImage = document.createElement('img');
        newImage.src = src;
        document.getElementById('preview').innerHTML = newImage.outerHTML;
        console.log(fileSelected)
    })

    cancel_update.onclick = function(){
        form1.reset();
    }
</script>