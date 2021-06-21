<?php
session_start();
include 'assets/config/db.php';

if (isset($_POST['login'])) {
  error_reporting(0);
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if (empty($email) || empty($password)){
      echo " <script>alert('Failed, Data Anda tidak lengkap'); </script> ";
    }else{
      $sql=mysqli_query($conn ,"SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'");

      if (mysqli_num_rows($sql) == 0) {
        echo '<script language="javascript">alert("User tidak ada!"); document.location="login.php";</script>';
      }else{
        $row = mysqli_fetch_assoc($sql);
        if ($row['level'] == 0 ) {
          $_SESSION['login']=$row['id'];
          header('Location: assets/pages/admin/index.php');
        }else if($row['level'] == 1 ){
         header('Location: assets/pages/admin/index.php');
          $_SESSION['login']=$row['id'];
        }else if($row['level'] == 2 ){
         header('Location: assets/pages/admin/index.php');
          $_SESSION['login']=$row['id'];
        }else{
         header('Location: assets/pages/index.php');
          $_SESSION['login']=$row['id'];
        }
      }
    }   
}

?>
<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:49:40 GMT -->
<head>
  <title>Masuk | Rumah.com</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- App css -->
  <link href="assets/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box ">
      <div class="left">
        <div class="content">
          <div class="header">
            <div class="logo text-center"><img src="assets/images/logo2.png" style="width: 30%;"></div>
            <p class="lead">Masuk dengan Akun anda</p>
          </div>
          <form class="form-auth-small" action="" method="post">
            <div class="form-group">
              <label for="signin-email" class="control-label sr-only">Email</label>
              <input type="email" class="form-control" id="signin-email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <label for="signin-password" class="control-label sr-only">Kata Sandi</label>
              <input type="password" class="form-control" id="signin-password" placeholder="Kata Sandi" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Masuk</button>
            <div class="bottom">
              <span class="helper-text d-block">Tidak Memiliki AKun? <a href="register.php">Membuat akun</a></span>
            </div>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="overlay"></div>
        <div class="content text">
          <h1 class="heading">Rumah.com</h1>
          <p>by The Developers</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:49:40 GMT -->
</html>