<?php
  session_start();
  $koneksi = new mysqli("localhost","root","","perpustakaan_purnama");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
    
</head>

<body>
  <div class="container" style="background: orange;">
    <div class="row text-center ">
      <div class="col-md-12">
        <div class="login-box" >
          <!-- <img src="img/background.jpg" width="300px" height="100px"><br>
          <br /><br /> -->
          <h2><b><font color="#002347">Login Administrator</font></b></h2>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Masuk Admin Perpustakaan Purnama</strong>  
            </div>
            <div class="panel-body">
              <form role="form" method="post">
                <br />
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="text" class="form-control" placeholder="Your Username" name="user" />
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" class="form-control"  placeholder="Your Password" name="pass" />
                </div>
                <hr />
                <button class="btn btn-primary" name="login">Login</button>
              </form>

              <?php
                if (isset($_POST['login'])) {
                  $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
                  $cocok = $ambil->num_rows;
                  if ($cocok==1) {
                    $_SESSION['admin'] = $ambil->fetch_assoc();
                    echo "<div class='alert alert-info'>Login Berhasil</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                  }
                  else {
                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                  }
                }
                                      
              ?>
          </div>               
        </div>
      </div>       
    </div>
  </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
