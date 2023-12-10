<?php 

$ambil = $koneksi->query("SELECT * FROM buku WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
if (file_exists("assets/foto_produk/$fotoproduk")) {
	unlink("assets/foto_produk/$fotoproduk");
}

$koneksi->query("DELETE FROM buku WHERE id_produk='$_GET[id]'");
echo "<script> alert('Produk Terhapus'); </script>";
echo "<script> location='index.php?hal=produk'; </script>";

?>