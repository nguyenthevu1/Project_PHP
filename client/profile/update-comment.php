<?php
require 'header2.php';
$updateCmtId = $_GET['cmtId'];
if (isset($_POST['contentCmt'])) {
    $newContent = $_POST['contentCmt'];
    $rating = $_POST['rating'];
    $sql = "UPDATE comment SET comment = '$newContent',rating = '$rating' WHERE cmtId = $updateCmtId ";
    $query = $conn->query($sql);
    if ($query) {
        echo 'Sửa đổi thành công';
    } else {
        echo "Sủa đổi thất bại";
    }
}
$sql2 = "SELECT comment,rating from comment WHERE cmtId = $updateCmtId";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
?>

<form method="POST" action="" id="form">
    <div class="form-group">
        <?php

        $stars = $row2['rating'];
        if ($stars <= 5) {
            for ($i = 0; $i < $stars; $i++) {
                echo '<label class="star_chk active" for="star' . ($i + 1) . '" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="' . ($i + 1) . '" id="star' . ($i + 1) . '" style="display: none;">';
            }
            for ($i = $stars; $i < 5; $i++) {
                echo '<label class="star_chk" for="star' . ($i + 1) . '" id="star" style="width: 30px;"><i class="fa fa-star"></i></label>
                        <input type="radio" name="rating" value="' . ($i + 1) . '" id="star' . ($i + 1) . '" style="display: none;">';
            }
        }
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Bình luận</label>
        <textarea class="form-control" name="contentCmt" placeholder="Nội dung bình luận..." style="height: 100px;"><?php echo $row2['comment'] ?></textarea>
    </div>

    <input type="hidden" value="<?php echo $_SESSION['user']['userId']; ?>" name="userId">
    <button type="submit" class="btn btn-default" name="update_comment">Cập Nhật</button>
    <a href='../profile-user.php?route=comment'><button type="button" class="btn btn-danger" id="cancel">Hủy</button></a>
</form>
<?php

include '../footer.php';
?>
