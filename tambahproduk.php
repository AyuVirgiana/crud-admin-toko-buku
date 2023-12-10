<h2 style="font-family:harrington;">Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Barcode</label>
		<input type="text" class="form-control" name="barcode">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Pengarang</label>
		<input type="text" class="form-control" name="pengarang">
	</div>
	<div class="form-group">
		<label>Penerbit</label>
		<input type="text" class="form-control" name="penerbit">
	</div>
	<div class="form-group">
		<label>Tahun Buku</label>
		<input type="number" class="form-control" name="tahun">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" class="form-control" name="kategori">
	</div>
	<div class="form-group">
		<label>Jumlah halaman</label>
		<input type="number" class="form-control" name="halaman">
	</div>
	<div class="form-group">
		<label>ISBN</label>
		<input type="text" class="form-control" name="isbn">
	</div>
	<div class="form-grup">
		<label>Harga Beli (Rp)</label>
		<input type="number" class="form-control" name="harga_beli">
	</div>
	<div class="form-grup">
		<label>Harga Jual (Rp)</label>
		<input type="number" class="form-control" name="harga_jual">
	</div>
	<div class="form-grup">
		<label>Berat (gr)</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-grup">
		<label>Stok Produk</label>
		<input type="number" class="form-control" name="stok">
	</div>	
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Lampiran Buku Tambahan</label>
		<input type="file" class="form-control" name="resep">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php  
	if (isset($_POST['save'])) {
		//foto
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "assets/foto_produk/".$nama);

		//file resep
		$namaresep = $_FILES['resep']['name'];
		$lokasiresep = $_FILES['resep']['tmp_name'];
		move_uploaded_file($lokasiresep, "assets/resep_produk/".$namaresep);

		//input ke data base
		$koneksi->query("INSERT INTO buku (barcode,nama_produk,pengarang,isbn,penerbit,tahun,kategori,halaman,harga_beli,harga_jual,berat_produk,foto_produk,deskripsi_produk,resep_produk,stok_produk)
						VALUES('$_POST[barcode]','$_POST[nama]','$_POST[pengarang]','$_POST[isbn]','$_POST[penerbit]','$_POST[tahun]','$_POST[kategori]','$_POST[halaman]','$_POST[harga_beli]','$_POST[harga_jual]','$_POST[berat]','$nama','$_POST[deskripsi]','$namaresep','$_POST[stok]')");

		echo "<div class='aler alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?hal=produk'>";
	}

?>

