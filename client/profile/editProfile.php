<div class="editProfile">
    <div class="edit">
        <div class="Name">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
                <h3><?php echo  isset($_SESSION['user']['fullName']) ? $_SESSION['user']['fullName'] : ''; ?></h3>
            </span>
            <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
        </div>
        <form method="POST" id="form1" class="formEdit active" action='../client/profile/edit-infor.php'>
            <div class="form-group">
                <label for="fullName">Họ và tên</label>
                <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên mới" name="fullName" required>
            </div>
            <button type="submit" class="btn btn-default" name="edit_name">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
    <div class="edit">
        <div class="Name">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <span>
                <h3>Số Điện Thoại</h3>
            </span>
            <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
        </div>
        <form method="POST" id="form2" class="formEdit active" action='../client/profile/edit-infor.php'>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại mới" name="phone" required>
            </div>
            <button type="submit" class="btn btn-default" name="edit_phone">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
    <div class="edit">
        <div class="Name">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span>
                <h3>Email</h3>
            </span>
            <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
        </div>
        <form method="POST" id="form3" class="formEdit active" action='../client/profile/edit-infor.php'>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập Emai mới" name="email" required>
            </div>
            <button type="submit" class="btn btn-default" name="edit_email">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
    <div class="edit">
        <div class="Name">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <span>
                <h3>Đổi mật khẩu</h3>
            </span>
            <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
        </div>
        <form method="POST" id="form4" class="formEdit active" action='../client/profile/edit-infor.php'>

            <div class="form-group">
                <label for="password">Mật khẩu hiện tại</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập Mật khẩu hiện tại" name="currentPass" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu mới</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập Mật khẩu mới" name="NewPass" required>
            </div>
            <div class="form-group">
                <label for="password">Xác nhận</label>
                <input type="password" class="form-control" id="password" placeholder="Xác nhận mật khẩu " name="confirmPass" required>
            </div>
            <button type="submit" class="btn btn-default" name="changePass">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
</div>

<script>
    const cancel_update = document.querySelectorAll('.cancel_update');
    const form1 = document.querySelector('#form1');
    const form2 = document.querySelector('#form2');
    const form3 = document.querySelector('#form3');
    const form4 = document.querySelector('#form4');

    const formEdit = document.querySelectorAll('.formEdit');
    const plus = document.getElementsByClassName('fa fa-plus-circle plus');

    cancel_update.forEach(function(e, index) {
        e.onclick = function() {
            if (index = 1) form1.reset();
            if (index = 2) form2.reset();
            if (index = 3) form3.reset();
            if(index = 4)  form4.reset();
        }
    })

    Array.from(plus).forEach(function(e, index) {
        e.onclick = function() {
            formEdit[index].classList.toggle('active');
        }
    })
</script>