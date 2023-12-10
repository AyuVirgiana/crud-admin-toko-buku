<?php 
	$koneksi = new mysqli("localhost","root","","perpustakaan_purnama");

	//mendapatkan id dari url
	$id_produk = $_GET['id'];

	//ambil data id dari database
	$ambil = $koneksi->query("SELECT * FROM buku WHERE id_produk='$id_produk'");
	$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
    <!-- Custom CSS -->
    <link href="assets/css/detail.css" rel="stylesheet">
</head>

<body>
	<h2 id="judul">Detail Buku</h2>

	<div id="container">

	<!-- section -->
	<section class="kontent">
		<div class="container" >
			<div class="row">
				<div class="col-md-5">
					<img src="assets/foto_produk/<?php echo $detail['foto_produk']; ?>" class="img-responsive" >
					<div id="deskripsi">
						<label>Deskripsi : </label><br>
						<p><?php echo $detail['deskripsi_produk']; ?></p>
						<a href="assets/resep_produk/<?php echo $detail['resep_produk']; ?>" class="navbar-right">Lampiran Lainnya</a>
					</div>
				</div>
				<div class="col-md-4" id="identitas">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td> Barcode </td><td> : </td><td><?php echo $detail['barcode']; ?></td>
							</tr>
							<tr>
								<td> Nama Buku </td><td> : </td><td><?php echo $detail['nama_produk']; ?></td>
							</tr>
							<tr>
								<td> ISBN </td><td> : </td><td><?php echo $detail['isbn']; ?></td>
							</tr>
							<tr>
								<td> Pengarang </td><td> : </td><td><?php echo $detail['pengarang']; ?></td>
							</tr>
							<tr>
								<td> Penerbit </td><td> : </td></td><td><?php echo $detail['penerbit']; ?></td>
							</tr>							
							<tr>
								<td> Tahun </td><td> : </td></td><td><?php echo $detail['tahun']; ?></td>
							</tr>
							<tr>
								<td> Kategori </td><td> : </td></td><td><?php echo $detail['kategori']; ?></td>
							</tr>

							<tr>
								<td> Halaman </td><td> : </td></td><td><?php echo $detail['halaman']; ?></td>
							</tr>
							<tr>
								<td> Berat (gr) </td><td> : </td></td><td><?php echo $detail['berat_produk']; ?></td>
							</tr>
							<tr>
								<td> Stok </td><td> : </td><td><?php echo number_format($detail['stok_produk']); ?></td>
							</tr>
							<tr>
								<td> Harga Beli </td><td> : </td><td>Rp. <?php echo number_format($detail['harga_beli']); ?></td>
							</tr>
							<tr>
								<td> Harga Jual</td><td> : </td><td>Rp. <?php echo number_format($detail['harga_jual']); ?></td>
							</tr>

						</tbody>
					</table>

					<!--<div>
						<label>Nama Buku : </label>
						<?php echo $detail['nama_produk']; ?>
					</div>-->

				</div>
				
			</div>
		</div>
	</section>
</body>
</html>