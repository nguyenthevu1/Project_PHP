<?php 

    function setComment($conn){
        if(isset($_POST['commentSubmit'])){
            $SES = $_SESSION['user']['userId'];
            $comment = $_POST['message'];
            $name = $_SESSION['user']['fullName'];      
            
            $insert  = "INSERT INTO comment(userId, comment) VALUES('$SES', '$comment')";
            $query = $conn->query($insert);  
        }
    }
    function getComment($conn){
        $sql = "SELECT * FROM comment";
        $resultComment = $conn->query($sql);

        $sql = "SELECT fullName FROM users,comment WHERE users.userId = comment.userId ";
        $result = $conn->query($sql);

        while($row=$resultComment->fetch_assoc()){
            echo "<div>";
          
            while($rowName = $result->fetch_assoc()){
               
                echo $rowName['fullName']."<br>";
                break;                
            }
                
                echo $row['date']."<br>";
                echo $row['comment']."<br><br>";
            echo"</div>";
        }
    }
?>