<?php
  include('../db/config.php');
  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $repwd = $_POST['repeatpassword'];

    $takeEmail="SELECT * FROM users WHERE email like '%$email'";
    $queryDb = mysqli_connect($conn,$takeEmail);
    $convertData = mysqli_fetch_assoc($queryDb);
    $checkEmail = mysqli_num_rows($queryDb);
    $err = [];
    if(empty($name)){
      $err['emptyName'] = "Bạn chưa nhập tên của mình";
    }
    if(empty($email)){
      $err['emptyEmail'] = 'Bạn chưa nhập Email';
    }
    if(empty($pwd)){
      $err['emptyPassword'] = 'Bạn chưa nhập password';
    }
    if($pwd !== $repwd){
      $err['pwdNotMatch'] = 'Mật khẩu nhập lại không đúng';
    }
    if($checkEmail == 1){
      $err['existEmail'] = 'Email đã tồn tại trong hệ thống';
    }
    if(empty($err)){
      $hashpwd = password_hash($pwd,PASSWORD_DEFAULT);
      $sql = "INSERT INTO users(email , passWord,fullname) VALUES('$email' , '$hashpwd' , '$name')"; 
      $query = mysqli_connect($conn , $sql);
      if($query){
        header('location : login-users.php');
      }
      else{
        echo 'Something went wrong';
      }
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .danger{
          color : red;
        }

        .modify{
          border-left: 100px;
          text-decoration: none;
          text-align: center;
        }
    </style>
  </head>
  <body>
    <!-- Form đăng kí -->
    
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>               
                <form class="mx-1 mx-md-4"  method="post" action="test.php">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="email">Full name</label>
                      <input type="text" id="name" name="name" class="form-control" />
                      
                      <span class ="danger"> <?php echo(isset($err['emptyName']))?$err['emptyName']:''?> </span>
                    </div>
                  
                  </div>                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control" />
                      <span class="danger"><?php echo(isset($err['emptyEmail']))?$err['emptyEmail']:'' ?></span>
                      <span class="danger"><?php echo(isset($err['existEmail'])?$err['existEmail']:"")?></span>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />
                      <span class="danger"><?php echo(isset($err['emptyPassword'])?$err['emptyPassword']:'') ?></span>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="repeatpassword">Repeat your password</label>
                      <input type="password" id="repeatpassword" name="repeatpassword" class="form-control" />
                      <span class="danger"><?php echo(isset($err['pwdNotMatch'])?$err['pwdNotMatch']:'') ?></span>
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> -->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="btnRegister">Register</button>                   
                  </div>                  

                </form>

                <!-- nút về trang login form -->
                <a href = "login.php" class="modify"> Go to Login website?</a>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>