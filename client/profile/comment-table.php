<style>
    .star_chK {
        width: 30px;
        color: rgb(75, 122, 183);
    }
</style>

<div class="editProfile">
    <div class="edit">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Cấp độ</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Thời gian đặt</th>
                    <th scope="col">Thời gian trả</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>hahahah</td>
                    <td>hahahah</td>
                    <td>hahahah</td>
                    <td>hahahah</td>
                    <td>hahahah</td>
                    <td>hahahah</td>
                    <td class="action">
                        <a href=""><button class="btn btn-danger">Xóa</button></a>
                        <button class="btn btn-warning" id="edit_comment">Sửa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="comment_edit">
    <h4>Đánh giá</h4>
    <form method="POST" action="" id="form">
        <div class="form-group">
            <label class="star_chk" for="star1" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" value="1" id="star1" style="display: none;">
            <label class="star_chk" for="star2" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" value="2" id="star2" style="display: none;">
            <label class="star_chk" for="star3" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" value="3" id="star3" style="display: none;">
            <label class="star_chk" for="star4" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" value="4" id="star4" style="display: none;">
            <label class="star_chk" for="star5" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" value="5" id="star5" style="display: none;">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Bình luận</label>
            <textarea class="form-control" name="contentCmt" placeholder="Nội dung bình luận..." style="height: 100px;"></textarea>
        </div>
        <input type="hidden" value="<?php echo $_SESSION['user']['userId']; ?>" name="userId">
        <button type="submit" class="btn btn-default" name="update_comment">Cập Nhật</button>
        <button type="button" class="btn btn-danger" id="cancel">Hủy</button>
    </form>
</div>


<script>
    const edit_comment = document.getElementById('edit_comment');
    const comment_edit = document.querySelector('.comment_edit');
    const cancel = document.getElementById('cancel');
    const form = document.getElementById('form');
    edit_comment.onclick = function() {
        comment_edit.style = "display:block";
    }
    
    cancel.onclick = function() {
        comment_edit.style = "display:none";
        form.reset();
    }

</script>