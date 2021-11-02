<?php
        require 'header2.php';
        $updateCmtId = $_GET['cmtId'];
        if(isset($_POST['contentCmt'])){   
            $newContent = $_POST['contentCmt'];
            $sql = "UPDATE comment SET comment = '$newContent' WHERE cmtId = $updateCmtId ";
            $query = $conn->query($sql);
            if($query){
                echo 'Sửa đổi thành công';
            }
            else{
                echo "Sủa đổi thất bại";
            }
        }
        $sql2 = "SELECT comment from comment WHERE cmtId = $updateCmtId";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
?>

<form method="POST" action="" id="form">
    <div class="form-group">
            <label for="exampleInputEmail1">Bình luận</label>
            <textarea class="form-control" name="contentCmt" placeholder="Nội dung bình luận..." style="height: 100px;" ><?php echo $row2['comment']?></textarea>
        </div>
        
        <input type="hidden" value="<?php echo $_SESSION['user']['userId']; ?>" name="userId">
        <button type="submit" class="btn btn-default" name="update_comment">Cập Nhật</button>
        <a href='../profile-user.php?route=comment'><button type="button" class="btn btn-danger" id="cancel">Hủy</button></a>
    </form>
<?php
  
    include '../footer.php'; 
?>
