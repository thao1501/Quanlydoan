<?php
	session_start();
	include_once('db/connect.php');
  if(isset($_SESSION['dangnhap'])){
    header('Location:index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý đồ án</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Quản lý đồ án </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Quản lý đồ án Khoa Công Nghệ Thông Tin</p>
          <?php
          if(isset($_POST["dangnhap"])){
        $tk = $_POST["username"];
        $mk = md5($_POST["password"]);
        $rows = mysqli_query($mysqli,"
          select * from login where username = '$tk' and password = '$mk'
        ");
        $user = mysqli_fetch_array($rows);
        $count = mysqli_num_rows($rows);
        if($count==1){
          $_SESSION['dangnhap'] = $tk;
          $_SESSION['fullname'] = $user['fullname'];
          $_SESSION['avatar'] = $user['avatar'];
          $_SESSION["loged"] = true;
          header("location:index.php");
          setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
        }
        else{
          header("location:index.php");
          setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
        }
        
      }
    ?> 
        
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username" placeholder="Tài khoản">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
         
        </div>
        <?php if(isset($_COOKIE['error'])){ ?>
              <span style="color: red;"><?php echo $_COOKIE['error'] ?></span>
            <?php } ?>
            <?php if(isset($_COOKIE['success'])){ ?>
              <span style="color: #008000;"><?php echo $_COOKIE['success'] ?></span>
            <?php } ?>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="dangnhap" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
