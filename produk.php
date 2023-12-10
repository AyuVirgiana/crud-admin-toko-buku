<!DOCTYPE html>
<html>
  <head>
    <title>Produk</title>
		
    <!-- Custom CSS -->
    <link href="assets/css/produk.css" rel="stylesheet">

  </head>

  <body>
	<h2><b>Data Buku</b></h2>
	
	<div >
		<a href="index.php?hal=tambahproduk" class="btn btn-primary">Tambah Data</a>
	</div>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<!--<th>Barcode</th>-->
				<th>Nama</th>
				<th>Pengarang</th> 
				<th>Penerbit</th> 
				<th>Tahun buku</th>
				<th>Kategori</th> 
				<th>Jumlah<br> halaman</th>
				<!--<th>Harga Beli (Rp)</th>-->
				<th>Harga Jual (Rp)</th>
				<!--<th>Berat (gr)</th>-->
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query(" SELECT * FROM buku"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
			<tr>
				<td> <?php echo $nomor; ?></td>			
				<td> <img src="assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100"></td>
				<!--<td> <?php echo $pecah['barcode']; ?> </td>-->
				<td> <?php echo $pecah['nama_produk']; ?> </td>
				<td> <?php echo $pecah['pengarang']; ?> </td>
				<td> <?php echo $pecah['penerbit']; ?> </td>
				<td> <?php echo $pecah['tahun']; ?> </td>
				<td> <?php echo $pecah['kategori']; ?> </td>
				<td> <?php echo $pecah['halaman']; ?> </td>
				<td> <?php echo $pecah['harga_jual']; ?></td>
				<!-- <td> <?php echo $pecah['berat_produk']; ?></td> -->
				<td> <?php echo $pecah['stok_produk']; ?></td>

				<td>
					<a id="detail" href="index.php?hal=detail&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-success">Detail</a>
					<a id="ubah"href="index.php?hal=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-warning btn">Ubah</a>
					<a id="hapus"href="index.php?hal=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn">Hapus</a>
				</td>
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
  </body>
</html>







