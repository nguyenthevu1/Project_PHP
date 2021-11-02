<div class="editProfile">
    <div class="edit">
        <div class="Name">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
                <h3><?php echo $_SESSION['user']['fullName'] ?></h3>
            </span>
        </div>
        <form method="POST" action = '../client/profile/edit-infor.php'>
            <div class="form-group">
                <label for="fullName">Họ và tên</label>
                <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên mới" name="fullName" required>
            </div>
            <button type="submit" class="btn btn-default">Lưu</button>
            <button class="btn btn-danger" type="button" name="edit_name">hủy</button>
        </form>
    </div>
    <div class="edit">
        <form method="POST" action = '../client/profile/edit-infor.php'>
            <div class="Name">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <span>
                    <h3>Số Điện Thoại</h3>
                </span>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại mới" name="phone" required>
            </div>
            <button type="submit" class="btn btn-default" name="edit_phone">Lưu</button>
            <button class="btn btn-danger" type="button">hủy</button>
        </form>
    </div>
    <div class="edit">
        <form method="POST" action = '../client/profile/edit-infor.php'>
            <div class="Name">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>
                    <h3>Email</h3>
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập Emai mới" name="email" required>
            </div>
            <button type="submit" class="btn btn-default" name="edit_email">Lưu</button>
            <button class="btn btn-danger" type="button">hủy</button>
        </form>
    </div>
</div>