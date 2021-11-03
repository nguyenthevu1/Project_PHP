<?php 

require('../db/config.php');
session_start();
if(isset($_POST['booking']) && isset($_SESSION['user'])) {

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $people = $_POST['people'];
    $floor = $_POST['floor'];

    $price = $_POST['price'];
    $userId = $_POST['userId'];
    $productId = $_POST['productId'];

    $star_date = new DateTime($checkin);
    $end_date = $star_date->diff(new DateTime($checkout));
    $day = $end_date->days;

    $total = $price * $people * $day;
    
    // $addAdmin = "INSERT into admin(email,fullName,password,avatarAdmin)
    //                             values('$email','$fullName','$hasPwd`','$path')";
    // userId	productId	people	total	dateStart	dateEnd	

    $insert = "INSERT INTO producttaken(userId, productId, people,floor, total, dateStart, dateEnd) 
                values('$userId','$productId','$people','$floor','$total','$checkin','$checkout') ";
                mysqli_query($conn,$insert);
                header('location: profile-user.php?route=order');
}
else{
    header('location:login-users.php');
}


