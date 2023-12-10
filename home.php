<?php
	$koneksi = new mysqli("localhost","root","","perpustakaan_purnama");
  
  // mengambil data buku
  $data_buku = mysqli_query($koneksi,"SELECT * FROM buku");

  // menghitung data buku
  $jumlah_buku = mysqli_num_rows($data_buku);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>home</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/home.css" rel="stylesheet">

  </head>

  <body>
    <div id="container">
      <div id="header">
        <div>
          <h1><font color="white"><br><b>Perpustakaan </font> <font color="#002347">Purnama</font></b></h1>
          <h2><b><font color="#ffffff"> Selamat Datang Admin </font> <font color="#002347"><i><?php echo $_SESSION['admin']['nama_lengkap'] ; ?></i> !</font></b></h2>
          <h1><font color="white">Jumlah data buku : <font color="#002347"><?php echo $jumlah_buku; ?></b></h1>
        </div>
      </div>
    </div>
  </body>
</html>

