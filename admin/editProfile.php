<div class="editProfile">
    <div class="edit">
        <div class="Name">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
                <h3><?php echo $_SESSION['admin']['fullName'] ?></h3>
            </span>
        </div>
        <form method="POST" id="form1" action = './edit-infor.php'>
            <div class="form-group">
                <label for="fullName">Họ và tên</label>
                <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên mới" name="fullName" required>
            </div>
            <button type="submit" class="btn btn-primary" name="edit_name">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button" >hủy</button>
        </form>
    </div>
    <div class="edit">
        <form method="POST" id="form2" action = './edit-infor.php'>
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
            <button type="submit" class="btn btn-primary" name="edit_phone">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
    <div class="edit">
        <form method="POST" id="form3" action = './edit-infor.php'>
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
            <button type="submit" class="btn btn-primary" name="edit_email">Lưu</button>
            <button class="btn btn-danger cancel_update" type="button">hủy</button>
        </form>
    </div>
</div>

<script>
    const cancel_update = document.querySelectorAll('.cancel_update');
    const form1 = document.querySelector('#form1');
    const form2 = document.querySelector('#form2');
    const form3 = document.querySelector('#form3');

    cancel_update.forEach(function(e,index){
        e.onclick = function(){
            if(index = 1) form1.reset();
            if(index = 2) form2.reset();
            if(index = 3) form3.reset();
            
        }
    }) 
</script>