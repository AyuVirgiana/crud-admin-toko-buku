<h2>Ubah Produk</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM buku WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Barcode</label>
		<input type="text" class="form-control" name="barcode" value="<?php echo $pecah['barcode']; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Pengarang</label>
		<input type="text" class="form-control" name="pengarang" value="<?php echo $pecah['pengarang']; ?>">
	</div>
	<div class="form-group">
		<label>ISBN</label>
		<input type="text" class="form-control" name="isbn" value="<?php echo $pecah['isbn']; ?>">
	</div>
	<div class="form-group">
		<label>Penerbit</label>
		<input type="text" class="form-control" name="penerbit"value="<?php echo $pecah['penerbit']; ?>">
	</div>	
	<div class="form-group">
		<label>Tahun Buku</label>
		<input type="number" class="form-control" name="tahun" value="<?php echo $pecah['tahun']; ?>">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" class="form-control" name="kategori" value="<?php echo $pecah['kategori']; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah halaman</label>
		<input type="number" class="form-control" name="halaman" value="<?php echo $pecah['halaman']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Beli (Rp)</label>
		<input type="number" class="form-control" name="harga_beli" value="<?php echo $pecah['harga_beli']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Jual(Rp)</label>
		<input type="number" class="form-control" name="harga_jual" value="<?php echo $pecah['harga_jual']; ?>">
	</div>
	<div class="form-group">
		<label>Berat (gr)</label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Foto</label><br>
		<img src="assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Stok Buku</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi_produk']; ?></textarea>
	</div>
	<div class="form-group">
		<label>File : </label><br>
		<a href="resep_produk/<?php echo $detail['resep_produk'];?>"><label><?php echo $pecah['resep_produk']; ?></label></a>
	</div>
	<div class="form-group">
		<label>Ganti File</label>
		<input type="file" class="form-control" name="resep">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
	
	if (isset($_POST['ubah'])) {
		//foto
		$namafoto = $_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		

		//jika foto diubah
		if (!empty($lokasifoto)) {
			move_uploaded_file($lokasifoto,"assets/foto_produk/$namafoto");

			$koneksi->query("UPDATE buku SET barcode='$_POST[barcode]', nama_produk='$_POST[nama]', pengarang='$_POST[pengarang]', isbn='$_POST[isbn]', penerbit='$_POST[penerbit]', tahun='$_POST[tahun]', kategori='$_POST[kategori]', halaman='$_POST[halaman]',harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', berat_produk='$_POST[berat]', foto_produk='$namafoto', stok_produk='$_POST[stok]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");
		}
		//jika tidak
		else { 
			$koneksi->query("UPDATE buku SET barcode='$_POST[barcode]', nama_produk='$_POST[nama]', pengarang='$_POST[pengarang]', isbn='$_POST[isbn]', penerbit='$_POST[penerbit]', tahun='$_POST[tahun]', kategori='$_POST[kategori]', halaman='$_POST[halaman]',harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', berat_produk='$_POST[berat]', stok_produk='$_POST[stok]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");
		}

		//file resep
		$namaresep = $_FILES['resep']['name'];
		$lokasiresep = $_FILES['resep']['tmp_name'];
		
		//jika file diubah
		if (!empty($lokasiresep)) {
			move_uploaded_file($lokasiresep, "assets/resep_produk/$namaresep"); 

			$koneksi->query("UPDATE buku SET barcode='$_POST[barcode]', nama_produk='$_POST[nama]', pengarang='$_POST[pengarang]', isbn='$_POST[isbn]', penerbit='$_POST[penerbit]', tahun='$_POST[tahun]', kategori='$_POST[kategori]', halaman='$_POST[halaman]',harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', berat_produk='$_POST[berat]', resep_produk='$namaresep', deskripsi_produk='$_POST[deskripsi]', stok_produk='$_POST[stok]' WHERE id_produk = '$_GET[id]'");
		}
		//jika tidak
		else {
			$koneksi->query("UPDATE buku SET barcode='$_POST[barcode]', nama_produk='$_POST[nama]', pengarang='$_POST[pengarang]', isbn='$_POST[isbn]', penerbit='$_POST[penerbit]', tahun='$_POST[tahun]', kategori='$_POST[kategori]', halaman='$_POST[halaman]',harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', berat_produk='$_POST[berat]', deskripsi_produk='$_POST[deskripsi]', stok_produk='$_POST[stok]' WHERE id_produk = '$_GET[id]'");
		}

	echo "<script> alert('Produk Terubah'); </script>";
	echo "<script> location='index.php?hal=produk'; </script>";
	}
?>