<?php
session_start();
include 'assets/config/db.php';
if (isset($_POST['register'])) 
{
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $tanggal_lahir = $_POST['tanggal_lahir'];
   $umur = $_POST['umur'];
   $no_tlp = $_POST['no_tlp'];
   $nik = $_POST['nik'];
   $email = $_POST['email'];
   $level = $_POST['level'];
   $password = md5($_POST['password']);
   

  if (empty($nama) || empty($alamat) || empty($tanggal_lahir) || empty($umur) || empty($no_tlp) || empty($nik) || empty($email) || empty($level) || empty($password))
  {
    echo " <script>alert('Failed, Data Anda tidak lengkap')</script> ";
  }
  else {
    $sql = "
    INSERT INTO tb_user 
    (nama, alamat, tanggal_lahir, umur, no_tlp, no_nik, email, password, level) 
    VALUES 
    ('$nama', '$alamat', '$tanggal_lahir', '$umur', '$no_tlp', '$nik', '$email', '$password', '$level')";
    $register = mysqli_query($conn, $sql);
      if ($register){
        $loginsql = "
          SELECT * FROM tb_user
          WHERE email = '$email' AND password = '$password'";
        $login = mysqli_query($conn, $loginsql);
        $datalogin = mysqli_fetch_array($login);

        $_SESSION["email"]= $datalogin['nama'];
        $_SESSION["login"] = $datalogin['id'];
        echo " <script>alert('Success, Anda Sudah Membuat Akun !');window.location='login.php'; </script> ";
      }else{
        echo " <script>alert('Failed, Membuat Akun'); </script> ";
      }   
  } 
}
?>
<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Daftar | Rumah.com</title>
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
    <div class="auth-box register">
      <div class="content">
        <div class="header">
          <div class="logo text-center"><img src="assets/images/logo2.png" style="width: 30%;"></div>
          <p class="lead">Membuat Akun</p>
        </div>
        <form class="form-auth-small" action="" method="post">
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Nama</label>
            <input type="text" class="form-control"  placeholder="Masukan Nama anda" name="nama">
          </div>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Alamat</label>
            <input type="text" class="form-control"  placeholder="Masukan Alamat anda" name="alamat">
          </div>
          <div class="form-group">
            Tanggal Lahir
            <input type="date" class="form-control"  placeholder="Masukan tanggal Lahir anda" name="tanggal_lahir">
          </div>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Umur</label>
            <input type="text" class="form-control"  placeholder="Masukan umur anda" name="umur">
          </div>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Nomer Telepon</label>
            <input type="text" class="form-control"  placeholder="Masukan Nomer Telepon anda" name="no_tlp">
          </div>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">No NIK</label>
            <input type="text" class="form-control"  placeholder="Masukan No NIK anda" name="nik" maxlength="16"  minlength="16">
          </div>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Email</label>
            <input type="email" class="form-control" id="signup-email" placeholder="Maskukan email anda" name="email">
          </div>
          <div class="form-group">
              <label>Sebagai</label>
              <select class="form-control" name="level">
                  <option selected>Pilih Salah 1</option>
                  <option value="1">Agen</option>
                  <option value="2">pemilik</option>
                  <option value="3">Pembeli</option>
             </select>
          </div>
          <div class="form-group">
            <label for="signup-password" class="control-label sr-only">Password</label>
            <input type="password" class="form-control" id="signup-password" placeholder="Masukian Password anda" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">Buat Akun</button>
          <div class="bottom">
            <span class="helper-text">Yakin Sudah Punbya akun ? <a href="login.php">Masuk</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:49:40 GMT -->
</html>