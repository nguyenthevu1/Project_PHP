<div class="editProfile">
    <div class="edit">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Cấp độ</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Thời gian đặt</th>
                    <th scope="col">Thời gian trả</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                        $id =$_SESSION['user']['userId'];
                        $sql ="SELECT * FROM users,producttaken,product  WHERE users.userId = producttaken.userId and product.productId = producttaken.productId and users.userId = '$id'";
                        $query = $conn->query($sql);
                        $i=0;
                        while($row = $query->fetch_assoc()){         
                            $i++;    
                    ?>
                <tr>
                  
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['fullName']?></td>
                        <td><?php echo $row['productName']?></td>
                        <td><?php echo $row['level']?></td>
                        <td><?php echo number_format($row['total'])?></td>
                        <td><?php echo $row['dateStart']?></td>
                        <td><?php echo $row['dateEnd']?></td>
                        <td>
                            <a href="profile/delete-order.php?productId=<?php echo $row['proTakenId'] ?>">
                                <button name = "delete-submit" class="btn btn-danger">Hủy</button>
                            </a>
                        </td>  
                               
                </tr>
                <?php }?>  
            </tbody>
        </table>
    </div>
</div>